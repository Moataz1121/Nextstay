<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ShowHotelController extends Controller
{
    public function index(): View | Application | Factory
    {
        $query = Hotel::query()->with('roomTypes');
        if (request()->filled('price_from') || request()->filled('price_to')) {
            $query->whereHas('roomTypes', function ($q) {
                if (request()->filled('price_from')) {
                    $q->where('price', '>=', request('price_from'));
                }
                if (request()->filled('price_to')) {
                    $q->where('price', '<=', request('price_to'));
                }
            });
        }

        // --- إضافة فلترة بالمدينة هنا ---
        if (request()->filled('city_id')) { // افترض إن الـ parameter اللي جاي هو 'city_id'
            $query->where('city_id', request('city_id'));
        }

        $cities = City::query()->with('hotels')->get();
        $hotels = $query->get();
        return view('user.index', compact('hotels', 'cities'));

    }

    public function show(string $id): View | Application | Factory
    {
        $hotels = Hotel::query()->with('amenities')->findOrFail($id);

        $moreRooms = Room::query()
            ->with('roomType')
            ->take(3)
            ->get();

        return view('user.hotels-alex', compact('hotels', 'moreRooms'));
    }
//
//    public function ShowRooms($id): View|Application|Factory
//    {
//        $rooms = Room::query()->with('roomType.amenities')->findOrFail($id);
//
//        $roomType = RoomType::query()->get();
//
//        return view('user.more', compact('rooms', 'roomType'));
//    }

}
