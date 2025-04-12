<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use App\Models\RoomType;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Room::paginate(10);
        return view('admin.room.index' , compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roomTypes = RoomType::all();
        return view('admin.room.create' , compact('roomTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        //
        // dd($request->validated());
       $room =  Room::create($request->validated());
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $room->clearMediaCollection('room_images');
                $room->addMedia($image)->toMediaCollection('room_images');
            }
        }
        return redirect()->route('admin.room.index')->with('success' , 'Room Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
        $room = Room::with(['media', 'roomType'])->find($room->id);
        // $images = $room->getMedia('room_images');
        // dd($images);
        $images = $room->getMedia('room_images'); //
        return view('admin.room.show' , compact('room' , 'images'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
        $room = Room::with(['media', 'roomType'])->find($room->id);
        $roomTypes = RoomType::all();
        return view('admin.room.edit' , compact('room' , 'roomTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
        $room->update($request->validated());
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $room->clearMediaCollection('room_images');
                $room->addMedia($image)->toMediaCollection('room_images');
            }
        }
        return redirect()->route('admin.room.index')->with('success' , 'Room Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
        $room->clearMediaCollection('room_images');
        $room->delete();
        return redirect()->route('admin.room.index')->with('success' , 'Room Deleted Successfully');
    }
}
