<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cites = City::all();
        return view('admin.city.index' , compact('cites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {

        $data = $request->validated();
        City::create($data);
        return redirect()->route('admin.city.index')->with('success', 'City Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
        $city = City::find($city->id);
        return view('admin.city.edit' , compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        //
        $data = $request->validated();
        $city->update($data);
        return redirect()->route('admin.city.index')->with('success', 'City Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
        $city->delete();
        return redirect()->route('admin.city.index')->with('success', 'City Deleted Successfully');
    }
}
