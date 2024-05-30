<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'soma',
            'email' => 'soma@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
    }
}
