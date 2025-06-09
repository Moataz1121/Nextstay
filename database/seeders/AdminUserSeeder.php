<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'           => 'Super Admin',
            'email'          => 'admin@example.com',
            'password'       => Hash::make('password123'), // Always hash passwords!
            'phone'          => 1234567890,
            'gender'         => 'male',
            'role'           => 'admin',
            'remember_token' => Str::random(10),
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

    }
}
