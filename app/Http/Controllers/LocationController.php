<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $locations = Location::orderBy('location', 'asc')->get();
        return view('location.index')->with('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'location' => 'required|string|max:255',
            'abbreviation' => 'required|string|max:10'

        ]);

        Location::create([
            'location' => $validateData['location'],
            'abbreviation' => $validateData['abbreviation']

        ]);
        return redirect()->route('location.index')->with('success', 'Location created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location): View
    {
        return view('location.edit')->with('location', $location);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location): RedirectResponse
    {

        $validatedData = $request->validate([
            'location' => 'required|string|max:255',
            'abbreviation' => 'required|string|max:10'
        ]);

        $location->update($validatedData);

        return redirect()->route('location.index')->with('success', 'Location updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}


    public function delete_location($id)
    {
        $data = Location::find($id);
        $data->delete();

        return redirect()->route('location.index')->with('success', 'Location deleted successfully!');
    }
}
