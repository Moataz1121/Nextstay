<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    /** @use HasFactory<\Database\Factories\RoomTypeFactory> */
    use HasFactory;
    protected $fillable = ['hotel_id', 'name', 'price', 'capacity'];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class); // One RoomType can have many Rooms
    }

    // Define the relationship with the hotel
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class); // Each RoomType belongs to one Hotel
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_type_amenities');
    }
}
