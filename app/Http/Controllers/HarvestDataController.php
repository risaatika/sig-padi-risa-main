<?php

namespace App\Http\Controllers;

use App\Models\HarvestData;
use App\Http\Requests\StoreHarvestDataRequest;
use App\Http\Requests\UpdateHarvestDataRequest;
use App\Models\Subdistrict;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HarvestDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $harvestData = HarvestData::oldest('year')->paginate(12);
        $total = HarvestData::all()->count();

        return view('harvest-data.index', compact(
            'harvestData',
            'total'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $subdistricts = Subdistrict::all();

        return view('harvest-data.create', compact('subdistricts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHarvestDataRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (HarvestData::where('subdistrict_id', $validated['subdistrict_id'])->where('year', $validated['year'])->exists()) {
            return redirect()
                ->route('harvest-data.create')
                ->withInput()
                ->dangerBanner(__('harvest_data.year_exists', ['year' => $validated['year']]));
        }

        $harvestData = new HarvestData();
        $harvestData->subdistrict_id = $validated['subdistrict_id'];
        $harvestData->year = $validated['year'];
        $harvestData->land_area = $validated['land_area'];
        $harvestData->harvested_area = $validated['harvested_area'];
        $harvestData->productivity = $validated['productivity'];
        $harvestData->yield = $validated['yield'];

        $harvestData->save();
        $harvestData->refresh();

        return redirect()
            ->route('harvest-data.index')
            ->banner(__('harvest_data.added', [
                'year' => $harvestData->year,
                'subdistrict' => $harvestData->subdistrict->name,
            ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HarvestData $harvestData): View
    {
        return view('harvest-data.edit', compact('harvestData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHarvestDataRequest $request, HarvestData $harvestData): RedirectResponse
    {
        $validated = $request->validated();

        if ($validated['year'] !== $harvestData->year && HarvestData::where('subdistrict_id', $harvestData->subdistrict_id)->where('year', $validated['year'])->exists()) {
            return redirect()
                ->route('harvest-data.edit', $harvestData)
                ->withInput()
                ->dangerBanner(__('harvest_data.year_exists', ['year' => $validated['year']]));
        }

        $harvestData->year = $validated['year'];
        $harvestData->land_area = $validated['land_area'];
        $harvestData->harvested_area = $validated['harvested_area'];
        $harvestData->productivity = $validated['productivity'];
        $harvestData->yield = $validated['yield'];

        $harvestData->save();

        return redirect()
            ->route('harvest-data.index')
            ->banner(__('harvest_data.edited', [
                'year' => $harvestData->year,
                'subdistrict' => $harvestData->subdistrict->name,
            ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HarvestData $harvestData): RedirectResponse
    {
        $harvestData->delete();

        return redirect()
            ->route('harvest-data.index')
            ->banner(__('harvest_data.deleted', [
                'year' => $harvestData->year,
                'subdistrict' => $harvestData->subdistrict->name,
            ]));
    }
}
