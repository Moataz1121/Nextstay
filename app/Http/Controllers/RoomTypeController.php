<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomTypeRequest;
use App\Http\Requests\UpdateRoomTypeRequest;
use App\Models\Hotel;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roomTypes = RoomType::paginate(10);
        return view('admin.roomTypes.index' , compact('roomTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $hotels = Hotel::all();
        return view('admin.roomTypes.create' , compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomTypeRequest $request)
    {
        //
        // dd($request->validated());
        $data = $request->validated();
        RoomType::create($data);
        return redirect()->route('admin.roomtype.index')->with('success', 'Room Type Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $roomType = RoomType::findOrFail($id);
        // dd($roomType);
        return view('admin.roomTypes.show' , compact('roomType'));




    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $roomType = RoomType::findOrFail($id);
        $hotels = Hotel::all();
        return view('admin.roomTypes.edit' , compact('roomType' , 'hotels'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomTypeRequest $request, $id)
    {
        //
        $roomType = RoomType::findOrFail($id);
        $data = $request->validated();
        // dd($data);
        $roomType->update($data);
        return redirect()->route('admin.roomtype.index')->with('success', 'Room Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // dd($roomType);
        $roomType = RoomType::findOrFail($id);
        $roomType->delete();
        return redirect()->route('admin.roomtype.index')->with('success', 'Room Type Deleted Successfully');
    }
}
