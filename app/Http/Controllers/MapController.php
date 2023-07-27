<?php

namespace App\Http\Controllers;

use App\Models\HarvestData;
use App\Models\Subdistrict;
use Illuminate\View\View;

class MapController extends Controller
{
    public function __invoke(int $year): View
    {
        $subdistricts = Subdistrict::all();
        $harvestData = HarvestData::all();
        $attributes = ['land_area', 'harvested_area', 'productivity', 'yield'];

        $meanData = [];
        $standardDeviationData = [];
        foreach ($attributes as $attribute) {
            $meanData[$attribute] = $harvestData->avg($attribute);
            $standardDeviationData[$attribute] = $this->calcStandardDeviaton($harvestData->pluck($attribute)->toArray());
        }

        $normalizedData = $harvestData->map(function ($data) use ($attributes, $meanData, $standardDeviationData) {
            foreach ($attributes as $attribute) {
                $data["original_$attribute"] = $data[$attribute];
                $data[$attribute] = ($data[$attribute] - $meanData[$attribute]) / $standardDeviationData[$attribute];
            }

            return $data;
        });

        $nisamKey = $normalizedData->search(fn ($data) => $data->subdistrict->name === 'Nisam' && $data->year === 2019);
        $nisam = $normalizedData[$nisamKey];
        $nisam->number = $nisamKey + 1;

        $bandaBaroKey = $normalizedData->search(fn ($data) => $data->subdistrict->name === 'Banda Baro' && $data->year === 2021);
        $bandaBaro = $normalizedData[$bandaBaroKey];
        $bandaBaro->number = $bandaBaroKey + 1;

        $tanahPasirKey = $normalizedData->search(fn ($data) => $data->subdistrict->name === 'Tanah Pasir' && $data->year === 2022);
        $tanahPasir = $normalizedData[$tanahPasirKey];
        $tanahPasir->number = $tanahPasirKey + 1;

        $initialClusterData = [$nisam, $bandaBaro, $tanahPasir];

        $initialIterationData = $normalizedData->map(function ($data) use ($initialClusterData) {
            foreach ($initialClusterData as $key => $clusterData) {
                $data['C' . $key + 1] = sqrt(pow($data->land_area - $clusterData->land_area, 2) + pow($data->harvested_area - $clusterData->harvested_area, 2) + pow($data->productivity - $clusterData->productivity, 2) + pow($data->yield - $clusterData->yield, 2));
            }

            $data['closest_cluster'] = $data['C1'] <= $data['C2'] ? 'C1' : ($data['C2'] <= $data['C3'] ? 'C2' : 'C3');

            return $data;
        });

        $initialMeansData  = [];

        foreach ($attributes as $i => $attribute) {
            $temporary = [];
            foreach ($initialClusterData as $j => $clusterData) {
                $temporary['C' . $j + 1] = $initialIterationData->where('closest_cluster', 'C' . $j + 1)->avg($attribute);
            }

            $initialMeansData[] = $temporary;
        }

        $kMeansData = collect([
            [
                'distance' => $initialIterationData,
                'means' => collect($initialMeansData),
            ],
        ]);

        do {
            $previousMeanData = $kMeansData->take(-1)->first()['means'];
            $iterationData = $normalizedData->map(function ($data) use ($previousMeanData, $initialClusterData) {
                for ($i = 0; $i < count($initialClusterData); $i++) {
                    $key = 'C' . $i + 1;
                    $mean = $previousMeanData->pluck($key);
                    $data[$key] = sqrt(
                        pow($data->land_area - $mean[0], 2)
                            + pow($data->harvested_area - $mean[1], 2)
                            + pow($data->productivity - $mean[2], 2)
                            + pow($data->yield - $mean[3], 2)
                    );
                }

                $data['closest_cluster'] = $data['C1'] <= $data['C2'] ? 'C1' : ($data['C2'] <= $data['C3'] ? 'C2' : 'C3');

                return $data;
            });

            $meansData = [];

            foreach ($attributes as $attribute) {
                $temporary = [];
                foreach ($initialClusterData as $j => $clusterData) {
                    $temporary['C' . $j + 1] = $iterationData->where('closest_cluster', 'C' . $j + 1)->avg($attribute);
                }

                $meansData[] = $temporary;
            }

            $kMeansData->push(['distance' => $iterationData, 'means' => collect($meansData)]);
        } while (collect($meansData)->flatten()->diff($previousMeanData->flatten())->count() > 0);

        $lastData = $kMeansData->last()['distance']->where('year', $year);
        $c1 = $lastData->where('closest_cluster', 'C1');
        $c2 = $lastData->where('closest_cluster', 'C2');
        $c3 = $lastData->where('closest_cluster', 'C3');

        return view('map', compact(
            'c1',
            'c2',
            'c3',
            'subdistricts'
        ));
    }

    private function calcStandardDeviaton(array $data): float
    {
        $no_element = count($data);
        $var = 0.0;
        $avg = array_sum($data) / $no_element;
        foreach ($data as $i) {
            $var += pow(($i - $avg), 2);
        }
        return (float)sqrt($var / $no_element);
    }
}
