<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAmenityRoomRequest;
use App\Models\Amenity;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AmenityRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenities = Amenity::paginate(10);
        return view('admin.amenitieForRooms.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|Application|View
    {
        $rooms = RoomType::all();
        return view('admin.amenitieForRooms.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAmenityRoomRequest $request): RedirectResponse
    {
        $amenity= Amenity::query()->create($request->validated());

        if($request->room_type_id){
            $amenity->roomTypes()->attach($request->room_type_id);
        }
        return redirect()->route('admin.amenities-room.index')->with('success', 'Amenitie Created Successfully');
    }
}
