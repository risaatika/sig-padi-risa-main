<?php

namespace Database\Seeders;

use App\Models\HarvestData;
use App\Models\Subdistrict;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class HarvestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $years = [2018, 2019, 2020, 2021, 2022];
        // HarvestData::factory()
        //     ->count(130)
        //     ->sequence(
        //         fn (Sequence $sequence) => ['year' => $years[floor($sequence->index / 26)]],
        //     )
        //     ->sequence(
        //         ...Subdistrict::select('id')
        //             ->get()
        //             ->map(fn ($item) => ['subdistrict_id' => $item['id']])
        //             ->toArray()
        //     )
        //     ->create();

        HarvestData::upsert([
            ['year' => 2018, 'subdistrict_id' => 25, 'land_area' => 3060, 'harvested_area' => 3435, 'productivity' => 56.83, 'yield' => 195211.05],
            ['year' => 2018, 'subdistrict_id' => 1, 'land_area' => 6274, 'harvested_area' => 6298, 'productivity' => 56.48, 'yield' => 355711.04],
            ['year' => 2018, 'subdistrict_id' => 2, 'land_area' => 3861, 'harvested_area' =>  3886, 'productivity' => 54.41, 'yield' => 211437.26],
            ['year' => 2018, 'subdistrict_id' => 3, 'land_area' => 1568, 'harvested_area' => 1456, 'productivity' => 48.52, 'yield' => 70645.12],
            ['year' => 2018, 'subdistrict_id' => 26, 'land_area' => 1632, 'harvested_area' => 1008, 'productivity' => 48.62, 'yield' => 49008.96],
            ['year' => 2018, 'subdistrict_id' => 4, 'land_area' => 3444, 'harvested_area' => 3051, 'productivity' => 53.57, 'yield' => 163442.07],
            ['year' => 2018, 'subdistrict_id' => 5, 'land_area' => 1166, 'harvested_area' => 1139, 'productivity' => 52.4, 'yield' => 59683.6],
            ['year' => 2018, 'subdistrict_id' => 6, 'land_area' => 2816, 'harvested_area' => 4041, 'productivity' => 53.6, 'yield' => 216597.6],
            ['year' => 2018, 'subdistrict_id' => 7, 'land_area' => 636, 'harvested_area' => 504, 'productivity' => 49, 'yield' => 24696],
            ['year' => 2018, 'subdistrict_id' => 8, 'land_area' => 3713, 'harvested_area' => 3455, 'productivity' => 54.72, 'yield' => 189057.6],
            ['year' => 2018, 'subdistrict_id' => 21, 'land_area' => 2210, 'harvested_area' => 2159, 'productivity' => 54.31, 'yield' => 117255.29],
            ['year' => 2018, 'subdistrict_id' => 22, 'land_area' => 1207, 'harvested_area' => 1207, 'productivity' => 53.62, 'yield' => 64719.34],
            ['year' => 2018, 'subdistrict_id' => 23, 'land_area' => 1245, 'harvested_area' => 1090, 'productivity' => 48.04, 'yield' => 52363.6],
            ['year' => 2018, 'subdistrict_id' => 24, 'land_area' => 942, 'harvested_area' => 1050, 'productivity' => 45.64, 'yield' => 47922],
            ['year' => 2018, 'subdistrict_id' => 19, 'land_area' => 2980, 'harvested_area' => 2474, 'productivity' => 54.58, 'yield' => 135030.92],
            ['year' => 2018, 'subdistrict_id' => 20, 'land_area' => 1264, 'harvested_area' => 1525, 'productivity' => 51.52, 'yield' => 78568],
            ['year' => 2018, 'subdistrict_id' => 9, 'land_area' => 3767, 'harvested_area' => 2296, 'productivity' => 51.32, 'yield' => 117830.72],
            ['year' => 2018, 'subdistrict_id' => 11, 'land_area' => 2076, 'harvested_area' => 1619, 'productivity' => 45.52, 'yield' => 73696.88],
            ['year' => 2018, 'subdistrict_id' => 10, 'land_area' => 2212, 'harvested_area' => 920, 'productivity' => 45.21, 'yield' => 41593.2],
            ['year' => 2018, 'subdistrict_id' => 18, 'land_area' => 4260, 'harvested_area' => 4260, 'productivity' => 52.19, 'yield' => 222329.4],
            ['year' => 2018, 'subdistrict_id' => 12, 'land_area' => 1195, 'harvested_area' => 1388, 'productivity' => 48.05, 'yield' => 66693.4],
            ['year' => 2018, 'subdistrict_id' => 16, 'land_area' => 11341, 'harvested_area' => 9818, 'productivity' => 51.05, 'yield' => 501208.9],
            ['year' => 2018, 'subdistrict_id' => 17, 'land_area' => 4740, 'harvested_area' => 3086, 'productivity' => 51.47, 'yield' => 158836.42],
            ['year' => 2018, 'subdistrict_id' => 15, 'land_area' => 5310, 'harvested_area' => 1393, 'productivity' => 51.67, 'yield' => 71976.31],
            ['year' => 2018, 'subdistrict_id' => 13, 'land_area' => 4436, 'harvested_area' => 4704, 'productivity' => 51.21, 'yield' => 240891.84],
            ['year' => 2018, 'subdistrict_id' => 14, 'land_area' => 3005, 'harvested_area' => 2888, 'productivity' => 51.52, 'yield' => 148789.76],

            ['year' => 2019, 'subdistrict_id' => 1, 'land_area' => 4101.2, 'harvested_area' => 4109.7, 'productivity' => 56.36, 'yield' => 231622.692],
            ['year' => 2019, 'subdistrict_id' => 2, 'land_area' => 3067.2, 'harvested_area' => 3211.5, 'productivity' => 56.61, 'yield' => 181803.015],
            ['year' => 2019, 'subdistrict_id' => 3, 'land_area' => 1547.6, 'harvested_area' => 1537.9, 'productivity' => 46.37, 'yield' => 71312.423],
            ['year' => 2019, 'subdistrict_id' => 4, 'land_area' => 2924.9, 'harvested_area' => 3004.6, 'productivity' => 50.72, 'yield' => 152393.312],
            ['year' => 2019, 'subdistrict_id' => 5, 'land_area' => 732, 'harvested_area' => 733.8, 'productivity' => 49.55, 'yield' => 36359.79],
            ['year' => 2019, 'subdistrict_id' => 6, 'land_area' => 1958.2, 'harvested_area' => 1958.2, 'productivity' => 55.48, 'yield' => 108640.936],
            ['year' => 2019, 'subdistrict_id' => 7, 'land_area' => 197.2, 'harvested_area' => 123.1, 'productivity' => 47.63, 'yield' => 5863.253],
            ['year' => 2019, 'subdistrict_id' => 8, 'land_area' => 2939.3, 'harvested_area' => 3060.4, 'productivity' => 56.25, 'yield' => 172147.5],
            ['year' => 2019, 'subdistrict_id' => 9, 'land_area' => 1457.1, 'harvested_area' => 1457.3, 'productivity' => 50.05, 'yield' => 72937.865],
            ['year' => 2019, 'subdistrict_id' => 10, 'land_area' => 1995.8, 'harvested_area' => 1374.5, 'productivity' => 54.72, 'yield' => 75212.64],
            ['year' => 2019, 'subdistrict_id' => 11, 'land_area' => 1121.5, 'harvested_area' => 1172.5, 'productivity' => 50.61, 'yield' => 59340.225],
            ['year' => 2019, 'subdistrict_id' => 12, 'land_area' => 775.2, 'harvested_area' => 771.4, 'productivity' => 48.41, 'yield' => 37343.474],
            ['year' => 2019, 'subdistrict_id' => 13, 'land_area' => 4999.5, 'harvested_area' => 4999.5, 'productivity' => 55.33, 'yield' => 276622.335],
            ['year' => 2019, 'subdistrict_id' => 14, 'land_area' => 2368.4, 'harvested_area' => 2418, 'productivity' => 55.17, 'yield' => 133401.06],
            ['year' => 2019, 'subdistrict_id' => 15, 'land_area' => 3712.6, 'harvested_area' => 3712.6, 'productivity' => 55.23, 'yield' => 205046.898],
            ['year' => 2019, 'subdistrict_id' => 16, 'land_area' => 9141.9, 'harvested_area' => 9141.9, 'productivity' => 55.41, 'yield' => 506552.679],
            ['year' => 2019, 'subdistrict_id' => 17, 'land_area' => 3995.3, 'harvested_area' => 3995.3, 'productivity' => 55.55, 'yield' => 221938.915],
            ['year' => 2019, 'subdistrict_id' => 18, 'land_area' => 8648.5, 'harvested_area' => 8648.5, 'productivity' => 56.05, 'yield' => 484748.425],
            ['year' => 2019, 'subdistrict_id' => 19, 'land_area' => 4487.8, 'harvested_area' => 4487.9, 'productivity' => 57.21, 'yield' => 256752.759],
            ['year' => 2019, 'subdistrict_id' => 20, 'land_area' => 1762.1, 'harvested_area' => 1738, 'productivity' => 56.82, 'yield' => 98753.16],
            ['year' => 2019, 'subdistrict_id' => 21, 'land_area' => 1940.8, 'harvested_area' => 1940.9, 'productivity' => 57.71, 'yield' => 112009.339],
            ['year' => 2019, 'subdistrict_id' => 22, 'land_area' => 2570, 'harvested_area' => 2460.3, 'productivity' => 53.22, 'yield' => 130937.166],
            ['year' => 2019, 'subdistrict_id' => 23, 'land_area' => 1037.8, 'harvested_area' => 1059.9, 'productivity' => 50.52, 'yield' => 53546.148],
            ['year' => 2019, 'subdistrict_id' => 24, 'land_area' => 902.2, 'harvested_area' => 902.2, 'productivity' => 50.11, 'yield' => 45209.242],
            ['year' => 2019, 'subdistrict_id' => 25, 'land_area' => 2233.3, 'harvested_area' => 2137.2, 'productivity' => 58.24, 'yield' => 124470.528],
            ['year' => 2019, 'subdistrict_id' => 26, 'land_area' => 712.8, 'harvested_area' => 712.7, 'productivity' => 50.03, 'yield' => 35656.381],

            ['year' => 2020, 'subdistrict_id' => 1, 'land_area' => 4233.9, 'harvested_area' => 4151.2, 'productivity' => 54.16, 'yield' => 224828.992],
            ['year' => 2020, 'subdistrict_id' => 2, 'land_area' => 3550.3, 'harvested_area' => 3079.6, 'productivity' => 54.31, 'yield' => 167253.076],
            ['year' => 2020, 'subdistrict_id' => 3, 'land_area' => 964.1, 'harvested_area' => 915.6, 'productivity' => 46.37, 'yield' => 42456.372],
            ['year' => 2020, 'subdistrict_id' => 4, 'land_area' => 3124.9, 'harvested_area' => 3004.8, 'productivity' => 50.72, 'yield' => 152403.456],
            ['year' => 2020, 'subdistrict_id' => 5, 'land_area' => 1159.3, 'harvested_area' => 1126.3, 'productivity' => 49.55, 'yield' => 55808.165],
            ['year' => 2020, 'subdistrict_id' => 6, 'land_area' => 2524.7, 'harvested_area' => 2524.7, 'productivity' => 54.48, 'yield' => 137545.656],
            ['year' => 2020, 'subdistrict_id' => 7, 'land_area' => 445.3, 'harvested_area' => 465.6, 'productivity' => 47.63, 'yield' => 22176.528],
            ['year' => 2020, 'subdistrict_id' => 8, 'land_area' => 3415.3, 'harvested_area' => 3415.3, 'productivity' => 53.39, 'yield' => 182342.867],
            ['year' => 2020, 'subdistrict_id' => 9, 'land_area' => 2053.1, 'harvested_area' => 2124.6, 'productivity' => 50.05, 'yield' => 106336.23],
            ['year' => 2020, 'subdistrict_id' => 10, 'land_area' => 2638.2, 'harvested_area' => 2638.2, 'productivity' => 53.58, 'yield' => 141354.756],
            ['year' => 2020, 'subdistrict_id' => 11, 'land_area' => 1540.9, 'harvested_area' => 1733.3, 'productivity' => 50.61, 'yield' => 87722.313],
            ['year' => 2020, 'subdistrict_id' => 12, 'land_area' => 775.2, 'harvested_area' => 762.7, 'productivity' => 48.41, 'yield' => 36922.307],
            ['year' => 2020, 'subdistrict_id' => 13, 'land_area' => 5757.4, 'harvested_area' => 5661.1, 'productivity' => 53.55, 'yield' => 303151.905],
            ['year' => 2020, 'subdistrict_id' => 14, 'land_area' => 2735.3, 'harvested_area' => 2690.2, 'productivity' => 52.06, 'yield' => 140051.812],
            ['year' => 2020, 'subdistrict_id' => 15, 'land_area' => 2888.3, 'harvested_area' => 2884.4, 'productivity' => 52.65, 'yield' => 151863.66],
            ['year' => 2020, 'subdistrict_id' => 16, 'land_area' => 9885.4, 'harvested_area' => 9260.2, 'productivity' => 54.37, 'yield' => 503477.074],
            ['year' => 2020, 'subdistrict_id' => 17, 'land_area' => 4000.1, 'harvested_area' => 3996.4, 'productivity' => 52.74, 'yield' => 210770.136],
            ['year' => 2020, 'subdistrict_id' => 18, 'land_area' => 9419.7, 'harvested_area' => 9368.9, 'productivity' => 55.82, 'yield' => 522971.998],
            ['year' => 2020, 'subdistrict_id' => 19, 'land_area' => 4407.8, 'harvested_area' => 4250.3, 'productivity' => 55.56, 'yield' => 236146.668],
            ['year' => 2020, 'subdistrict_id' => 20, 'land_area' => 1242.7, 'harvested_area' => 1255.1, 'productivity' => 54.44, 'yield' => 68327.644],
            ['year' => 2020, 'subdistrict_id' => 21, 'land_area' => 2013.1, 'harvested_area' => 1816.9, 'productivity' => 55.28, 'yield' => 100438.232],
            ['year' => 2020, 'subdistrict_id' => 22, 'land_area' => 2498, 'harvested_area' => 2018.8, 'productivity' => 53.22, 'yield' => 107440.536],
            ['year' => 2020, 'subdistrict_id' => 23, 'land_area' => 758, 'harvested_area' => 604.9, 'productivity' => 50.52, 'yield' => 30559.548],
            ['year' => 2020, 'subdistrict_id' => 24, 'land_area' => 349.9, 'harvested_area' => 636.7, 'productivity' => 50.11, 'yield' => 31905.037],
            ['year' => 2020, 'subdistrict_id' => 25, 'land_area' => 2217.7, 'harvested_area' => 2187.2, 'productivity' => 55.72, 'yield' => 121870.784],
            ['year' => 2020, 'subdistrict_id' => 26, 'land_area' => 896.3, 'harvested_area' => 880.9, 'productivity' => 50.0303, 'yield' => 44071.427],

            ['year' => 2021, 'subdistrict_id' => 1, 'land_area' => 4340, 'harvested_area' => 4338.7, 'productivity' => 59.16, 'yield' => 25667.7492],
            ['year' => 2021, 'subdistrict_id' => 2, 'land_area' => 4103.8, 'harvested_area' => 4076.1, 'productivity' => 56.31, 'yield' => 22952.5191],
            ['year' => 2021, 'subdistrict_id' => 3, 'land_area' => 1368.3, 'harvested_area' => 1358.1, 'productivity' => 48.37, 'yield' => 6569.1297],
            ['year' => 2021, 'subdistrict_id' => 4, 'land_area' => 3758.2, 'harvested_area' => 3729, 'productivity' => 56.72, 'yield' => 21150.888],
            ['year' => 2021, 'subdistrict_id' => 5, 'land_area' => 1056.8, 'harvested_area' => 997.4, 'productivity' => 56.55, 'yield' => 5640.297],
            ['year' => 2021, 'subdistrict_id' => 6, 'land_area' => 1816.8, 'harvested_area' => 2087, 'productivity' => 58.48, 'yield' => 12204.776],
            ['year' => 2021, 'subdistrict_id' => 7, 'land_area' => 329, 'harvested_area' => 327.1, 'productivity' => 48.63, 'yield' => 1590.6873],
            ['year' => 2021, 'subdistrict_id' => 8, 'land_area' => 2965.1, 'harvested_area' => 3065.2, 'productivity' => 57.39, 'yield' => 17591.1828],
            ['year' => 2021, 'subdistrict_id' => 9, 'land_area' => 2146.6, 'harvested_area' => 1975.5, 'productivity' => 57.05, 'yield' => 11270.2275],
            ['year' => 2021, 'subdistrict_id' => 10, 'land_area' => 2527.6, 'harvested_area' => 2527.6, 'productivity' => 56.58, 'yield' => 14301.1608],
            ['year' => 2021, 'subdistrict_id' => 11, 'land_area' => 1240.4, 'harvested_area' => 1239.9, 'productivity' => 53.61, 'yield' => 6647.1039],
            ['year' => 2021, 'subdistrict_id' => 12, 'land_area' => 941.8, 'harvested_area' => 908.8, 'productivity' => 54.75, 'yield' => 4975.68],
            ['year' => 2021, 'subdistrict_id' => 13, 'land_area' => 5463.1, 'harvested_area' => 5559.3, 'productivity' => 57.55, 'yield' => 31993.7715],
            ['year' => 2021, 'subdistrict_id' => 14, 'land_area' => 1325.3, 'harvested_area' => 1322.5, 'productivity' => 58.06, 'yield' => 7678.435],
            ['year' => 2021, 'subdistrict_id' => 15, 'land_area' => 3319.1, 'harvested_area' => 3236.3, 'productivity' => 57.65, 'yield' => 18657.2695],
            ['year' => 2021, 'subdistrict_id' => 16, 'land_area' => 9573.8, 'harvested_area' => 8520.6, 'productivity' => 58.37, 'yield' => 49734.7422],
            ['year' => 2021, 'subdistrict_id' => 17, 'land_area' => 3877.9, 'harvested_area' => 2921.9, 'productivity' => 56.74, 'yield' => 16578.8606],
            ['year' => 2021, 'subdistrict_id' => 18, 'land_area' => 6448.9, 'harvested_area' => 6448.9, 'productivity' => 57.82, 'yield' => 37287.5398],
            ['year' => 2021, 'subdistrict_id' => 19, 'land_area' => 2455.4, 'harvested_area' => 2439.9, 'productivity' => 57.56, 'yield' => 14044.0644],
            ['year' => 2021, 'subdistrict_id' => 20, 'land_area' => 819.5, 'harvested_area' => 819.4, 'productivity' => 56.67, 'yield' => 4643.5398],
            ['year' => 2021, 'subdistrict_id' => 21, 'land_area' => 832.9, 'harvested_area' => 832.9, 'productivity' => 56.28, 'yield' => 4687.5612],
            ['year' => 2021, 'subdistrict_id' => 22, 'land_area' => 1243.7, 'harvested_area' => 1248.4, 'productivity' => 56.22, 'yield' => 7018.5048],
            ['year' => 2021, 'subdistrict_id' => 23, 'land_area' => 623.3, 'harvested_area' => 597.3, 'productivity' => 55.52, 'yield' => 3316.2096],
            ['year' => 2021, 'subdistrict_id' => 24, 'land_area' => 672.3, 'harvested_area' => 672.2, 'productivity' => 55.11, 'yield' => 3704.4942],
            ['year' => 2021, 'subdistrict_id' => 25, 'land_area' => 2187.1, 'harvested_area' => 2187.2, 'productivity' => 58.72, 'yield' => 12843.2384],
            ['year' => 2021, 'subdistrict_id' => 26, 'land_area' => 892.5, 'harvested_area' => 892.5, 'productivity' => 57.03, 'yield' => 5089.9275],

            ['year' => 2022, 'subdistrict_id' => 1, 'land_area' => 5679, 'harvested_area' => 3045, 'productivity' => 59.16, 'yield' => 180142.2],
            ['year' => 2022, 'subdistrict_id' => 2, 'land_area' => 4966, 'harvested_area' => 3134, 'productivity' => 56.31, 'yield' => 176475.54],
            ['year' => 2022, 'subdistrict_id' => 3, 'land_area' => 1313, 'harvested_area' => 689, 'productivity' => 48.37, 'yield' => 33326.93],
            ['year' => 2022, 'subdistrict_id' => 4, 'land_area' => 4258, 'harvested_area' => 2354, 'productivity' => 56.72, 'yield' => 133518.88],
            ['year' => 2022, 'subdistrict_id' => 5, 'land_area' => 768, 'harvested_area' => 683, 'productivity' => 56.55, 'yield' => 3862.365],
            ['year' => 2022, 'subdistrict_id' => 6, 'land_area' => 1923, 'harvested_area' => 1324, 'productivity' => 58.48, 'yield' => 7742.752],
            ['year' => 2022, 'subdistrict_id' => 7, 'land_area' => 272, 'harvested_area' => 179.7, 'productivity' => 48.63, 'yield' => 873.8811],
            ['year' => 2022, 'subdistrict_id' => 8, 'land_area' => 2180, 'harvested_area' => 981, 'productivity' => 57.39, 'yield' => 5629.959],
            ['year' => 2022, 'subdistrict_id' => 9, 'land_area' => 2326, 'harvested_area' => 1216, 'productivity' => 57.05, 'yield' => 6937.28],
            ['year' => 2022, 'subdistrict_id' => 10, 'land_area' => 2623, 'harvested_area' => 2206.5, 'productivity' => 56.58, 'yield' => 12484.377],
            ['year' => 2022, 'subdistrict_id' => 11, 'land_area' => 851, 'harvested_area' => 529, 'productivity' => 53.61, 'yield' => 2835.969],
            ['year' => 2022, 'subdistrict_id' => 12, 'land_area' => 844, 'harvested_area' => 855.3, 'productivity' => 54.75, 'yield' => 4682.7675],
            ['year' => 2022, 'subdistrict_id' => 13, 'land_area' => 5880, 'harvested_area' => 5199.4, 'productivity' => 57.55, 'yield' => 29922.547],
            ['year' => 2022, 'subdistrict_id' => 14, 'land_area' => 2006, 'harvested_area' => 1967.7, 'productivity' => 58.06, 'yield' => 11424.4662],
            ['year' => 2022, 'subdistrict_id' => 15, 'land_area' => 2864, 'harvested_area' => 2937.4, 'productivity' => 57.65, 'yield' => 16934.111],
            ['year' => 2022, 'subdistrict_id' => 16, 'land_area' => 8758, 'harvested_area' => 11082.9, 'productivity' => 58.37, 'yield' => 64690.8873],
            ['year' => 2022, 'subdistrict_id' => 17, 'land_area' => 4703, 'harvested_area' => 3019.9, 'productivity' => 56.74, 'yield' => 17134.9126],
            ['year' => 2022, 'subdistrict_id' => 18, 'land_area' => 7959, 'harvested_area' => 7183.6, 'productivity' => 57.82, 'yield' => 41535.5752],
            ['year' => 2022, 'subdistrict_id' => 19, 'land_area' => 1449, 'harvested_area' => 1334.7, 'productivity' => 57.56, 'yield' => 7682.5332],
            ['year' => 2022, 'subdistrict_id' => 20, 'land_area' => 613, 'harvested_area' => 655.3, 'productivity' => 56.67, 'yield' => 3713.5851],
            ['year' => 2022, 'subdistrict_id' => 21, 'land_area' => 773, 'harvested_area' => 886, 'productivity' => 56.28, 'yield' => 4986.408],
            ['year' => 2022, 'subdistrict_id' => 22, 'land_area' => 920, 'harvested_area' => 1107.7, 'productivity' => 56.22, 'yield' => 6227.4894],
            ['year' => 2022, 'subdistrict_id' => 23, 'land_area' => 427, 'harvested_area' => 449, 'productivity' => 55.52, 'yield' => 2492.848],
            ['year' => 2022, 'subdistrict_id' => 24, 'land_area' => 332, 'harvested_area' => 355.4, 'productivity' => 55.11, 'yield' => 1958.6094],
            ['year' => 2022, 'subdistrict_id' => 25, 'land_area' => 1694, 'harvested_area' => 1108, 'productivity' => 58.72, 'yield' => 6506.176],
            ['year' => 2022, 'subdistrict_id' => 26, 'land_area' => 736, 'harvested_area' => 526, 'productivity' => 57.03, 'yield' => 2999.778],


        ], ['year', 'subdistrict_id'], ['land_area', 'harvested_area', 'productivity', 'yield']);
    }
}
