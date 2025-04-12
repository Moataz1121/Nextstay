<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory , InteractsWithMedia;

    protected $fillable = ['room_type_id', 'status', 'room_number'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('room_images');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class); // Each Room belongs to one RoomType
    }
}
