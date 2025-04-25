<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
});

Route::get('/index' , function(){
    return view('user.search-result-alex');
});

require __DIR__.'/auth.php';
