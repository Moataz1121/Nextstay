<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    /** @use HasFactory<\Database\Factories\RoomTypeFactory> */
    use HasFactory;
    protected $fillable = ['hotel_id', 'name', 'price', 'capacity'];

    public function rooms()
    {
        return $this->hasMany(Room::class); // One RoomType can have many Rooms
    }

    // Define the relationship with the hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class); // Each RoomType belongs to one Hotel
    }
}
