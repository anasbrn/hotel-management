<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Room::create([
            'room_number' => 101,
            'hotel_id' => 1,
            'room_type' => 'single',
            'price_per_night' => 300,
        ]);

        \App\Models\Room::create([
            'room_number' => 1,
            'hotel_id' => 2,
            'room_type' => 'single',
            'price_per_night' => 50,
        ]);
        
    }
}
