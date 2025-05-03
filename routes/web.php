<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\AmenityRoomController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompleteReservationController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailHotelController;
use App\Http\Controllers\DetailRoomController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ShowHotelController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth','checkUserType'])->prefix('admin')->name('admin.')->group(function () {
Route::get('/index' , [HomeController::class , 'index'])->name('index');
Route::resource('/city' , CityController::class);
Route::resource ('/hotel' , HotelController::class);
Route::resource('/roomtype' , RoomTypeController::class);
Route::resource('/room' , RoomController::class);
Route::resource('/amenities' , AmenitiesController::class);
Route::resource('/amenities-room' , AmenityRoomController::class);
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact.index');
});

Route::get('gallery' , function(){
    return view('user.gallery');
});

Route::get('contact', [ContactUsController::class, 'create'])->name('contact');
Route::post('contact', [ContactUsController::class, 'store'])->name('contact.store');

Route::get('/', [ShowHotelController::class, 'index'])->name('index');
Route::get('details-hotel/{id}', [ShowHotelController::class, 'show'])->name('details.hotel');
Route::get('details-room/{id}', [DetailRoomController::class, 'show'])->name('details.room');


Route::post('complete-booking', [CompleteReservationController::class, 'store'])->name('complete.booking');

require __DIR__.'/auth.php';
