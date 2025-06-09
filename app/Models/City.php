<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class City extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\CityFactory> */
    use HasFactory , InteractsWithMedia;
    protected $fillable = ['name'];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('city_images');
    }
}
