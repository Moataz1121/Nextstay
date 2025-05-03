<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class DetailRoomController extends Controller
{
    public function show(string $id): View|Application|Factory
    {
        $rooms = Room::query()->with('roomType.amenities')->findOrFail($id);

        $roomType = RoomType::query()->get();

        return view('user.room-details', compact('rooms', 'roomType'));
    }
}
