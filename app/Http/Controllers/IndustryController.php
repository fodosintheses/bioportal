<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Industry;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data['industries'] = Industry::orderBy('industry', 'asc')->get();

        return view('industry.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('industry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'industry' => 'required|string|max:255',
            'abbreviation' => 'required|string|max:10'
        ]);

        Industry::create([
            'industry' => $validatedData['industry'],
            'abbreviation' => $validatedData['abbreviation']
        ]);

        return redirect()->route('industry.index')->with('success', 'Industry successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industry $industry): View
    {
        return view('industry.edit')->with('industry', $industry);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industry $industry): RedirectResponse
    {
        $validatedData = $request->validate([
            'industry' => 'required|string|max:255',
            'abbreviation' => 'required|string|max:10'
        ]);

        $industry->update($validatedData);

        return redirect()->route('industry.index')->with('success', 'Industry successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete_industry($id)
    {

        $data = Industry::find($id);
        $data->delete();

        return redirect()->route('industry.index')->with('success', 'Industry successfully deleted!');
    }
}
