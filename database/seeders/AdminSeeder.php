<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Check if the Admin user already exists
        if (!User::where('email', 'admin1@admin.com')->exists()) {
            User::create([
                'name' => 'Admin-Karangturi',
                'email' => 'admin1@admin.com',
                'password' => Hash::make('karangturi000'),
            ]);
        }
        if (!User::where('email', 'admin2@admin.com')->exists()) {
            User::create([
                'name' => 'Admin-Ki-Hadjar-Dewantara',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('karangturi470'),
            ]);
        }
    }
}
