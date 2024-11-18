<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Location;
use App\Models\Industry;
use App\Models\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['chowking'] = Store::where('industry_id', '5')->orderBy('store_name', 'asc')->get();
        $data['greenwich'] = Store::where('industry_id', '4')->orderBy('store_name', 'asc')->get();
        $data['jollibee'] = Store::where('industry_id', '1')->orderBy('store_name', 'asc')->get();
        $data['manginasal'] = Store::where('industry_id', '2')->orderBy('store_name', 'asc')->get();
        $data['redribbon'] = Store::where('industry_id', '3')->orderBy('store_name', 'asc')->get();

        return view('store.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $data['industries'] = Industry::orderBy('industry', 'asc')->get();
        $data['locations'] = Location::orderBy('location', 'asc')->get();
        return view('store.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'store_name' => 'required|string|max:255',
            'store_code' => 'required|string|max:10',
            'location_id' => 'required',
            'industry_id' => 'required'
        ]);

        Store::create([
            'store_name' => $validatedData['store_name'],
            'store_code' => $validatedData['store_code'],
            'industry_id' => $validatedData['industry_id'],
            'location_id' => $validatedData['location_id'],
        ]);

        return redirect()->route('store.index')->with('success', 'Store created successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
