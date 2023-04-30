<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Hotel::create([
            'name' => 'Hotel Yousoufia',
            'description' => 'This is the description of Hotel Youssoufia',
            'address' => 'L7ed',
            'num_rooms' => 10,
            'user_id' => 1,
            'city_id' => 1,
        ]);

        \App\Models\Hotel::create([
            'name' => 'Hotel Atlas',
            'description' => 'This is the description of Hotel Atlas',
            'address' => 'L7ed',
            'num_rooms' => 8,
            'user_id' => 1,
            'city_id' => 1,
        ]);
    }
}
