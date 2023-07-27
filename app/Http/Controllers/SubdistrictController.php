<?php

namespace App\Http\Controllers;

use App\Models\Subdistrict;
use App\Http\Requests\StoreSubdistrictRequest;
use App\Http\Requests\UpdateSubdistrictRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SubdistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $subdistricts = Subdistrict::simplePaginate(12);
        $total = Subdistrict::all()->count();

        return view('subdistricts.index', compact(
            'subdistricts',
            'total'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('subdistricts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubdistrictRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $subdistrict = new Subdistrict();
        $subdistrict->name = $validated['name'];
        $subdistrict->save();

        return redirect()
            ->route('subdistricts.index')
            ->banner(__('subdistricts.added', ['name' => $subdistrict->name]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subdistrict $subdistrict): View
    {
        return view('subdistricts.show', compact('subdistrict'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subdistrict $subdistrict): View
    {
        return view('subdistricts.edit', compact('subdistrict'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubdistrictRequest $request, Subdistrict $subdistrict): RedirectResponse
    {
        $validated = $request->validated();

        $subdistrict->name = $validated['name'];
        $subdistrict->save();

        return redirect()
            ->route('subdistricts.show', $subdistrict)
            ->banner(__('subdistricts.edited', ['name' => $subdistrict->name]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subdistrict $subdistrict): RedirectResponse
    {
        $subdistrict->delete();

        return redirect()
            ->route('subdistricts.index')
            ->banner(__('subdistricts.deleted', ['name' => $subdistrict->name]));
    }
}
