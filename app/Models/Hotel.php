<?php

namespace App\Models;

use Illuminate\Console\Concerns\InteractsWithIO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Hotel extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\HotelFactory> */
    use HasFactory , InteractsWithMedia;

    protected $fillable = [
        'name' , 'city_id' , 'address'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function roomTypes()
    {
        return $this->hasMany(RoomType::class); // A Hotel can have many RoomTypes
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('hotel_images');
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'amenity_hotel', 'hotel_id', 'amenity_id');
    }
}
