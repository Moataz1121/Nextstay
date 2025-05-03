<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompleteReservationRequest;
use App\Models\Booking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompleteReservationController extends Controller
{

    public function store(StoreCompleteReservationRequest $request): RedirectResponse
    {
    echo 'hi ';
//        try {
//            $dateTimes = explode(' - ', $request->input('datetimes'));
//
//
//            if(count($dateTimes) == 2){
//                $check_in = $dateTimes[0];
//                $check_out = $dateTimes[1];
//
//                // إضافة التواريخ إلى بيانات الريكوست المرسلة إلى الحجز
//                $validatedData = $request->validated();
//                $validatedData['check_in'] = $check_in;
//                $validatedData['check_out'] = $check_out;
//
//                Booking::query()->create($validatedData);
//
//                return redirect()->back()->with('success', 'Your booking has been successfully reserved');
//            }else{
//                throw new \Exception('Please enter a valid date and time');
//            }
//        } catch (\Exception $exception) {
//            return redirect()->back()->with('error', $exception->getMessage());
//        }
    }
}
