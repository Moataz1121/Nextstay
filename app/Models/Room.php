<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

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
