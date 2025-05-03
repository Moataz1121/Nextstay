<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAmenitiesRequest;
use App\Http\Requests\UpdateAmenitiesRequest;
use App\Models\Amenity;
use App\Models\Hotel;

class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $amenities = Amenity::paginate(10);
        return view('admin.amenitieForHotels.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.amenitieForHotels.create', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAmenitiesRequest $request)
    {
        //
        $amenity= Amenity::create($request->validated());

        if($request->hotel_id){
            $amenity->hotels()->attach($request->hotel_id);
        }
        return redirect()->route('admin.amenities.index')->with('success', 'Amenitie Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Amenity $amenities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $amenities = Amenity::find($id);
        return view('admin.amenitieForHotels.edit', compact('amenities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAmenitiesRequest $request, $id)
    {
        //
        $amenities = Amenity::find($id);
        $amenities->update($request->validated());
        return redirect()->route('admin.amenities.index')->with('success', 'Amenitie Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $amenities = Amenity::find($id);
        $amenities->delete();
        return redirect()->route('admin.amenities.index')->with('success', 'Amenitie Deleted Successfully');
    }
}
