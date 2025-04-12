<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAmenitiesRequest;
use App\Http\Requests\UpdateAmenitiesRequest;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $amenities = Amenities::paginate(10);
        return view('admin.amenitie.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.amenitie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAmenitiesRequest $request)
    {
        //
        Amenities::create($request->validated());
        return redirect()->route('admin.amenities.index')->with('success', 'Amenitie Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Amenities $amenities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $amenities = Amenities::find($id);
        return view('admin.amenitie.edit', compact('amenities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAmenitiesRequest $request, $id)
    {
        //
        $amenities = Amenities::find($id);
        $amenities->update($request->validated());
        return redirect()->route('admin.amenities.index')->with('success', 'Amenitie Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $amenities = Amenities::find($id);
        $amenities->delete();
        return redirect()->route('admin.amenities.index')->with('success', 'Amenitie Deleted Successfully');
    }
}
