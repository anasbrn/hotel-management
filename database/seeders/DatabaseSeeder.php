<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'image' => 'test',
            'email' => 'admin@gmail.com',
            'phone' => '0610922054',
            'password' => 'admin1234',
        ]);

        \App\Models\City::create([
            'name' => 'Youssoufia',
        ]);
    }
}
