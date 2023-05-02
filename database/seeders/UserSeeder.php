<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
    
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Anas Barnoch',
            'email' => 'anasbarnoch@gmail.com',
            'phone' => '0610922054',
            'password' => Hash::make('Test@000'),
        ]);
    }
}
