<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           CitySeeder::class,
           HotelSeeder::class,
           RoomTypeSeeder::class,
           RoomSeeder::class,
           AmenitiesSeeder::class,
        ]);
    }
}
