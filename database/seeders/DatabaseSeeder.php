<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Admin
        User::create([
            'name' => 'Admin Upk Mande',
            'email' => 'adminupkmande@gmail.com',
            'password' => Hash::make('adminupkmande999'),
            'role' => 'admin',
        ]);

        // User biasa
        User::create([
            'name' => 'Budi fernando',
            'email' => 'budi@gmail.com',
            'password' => Hash::make('budifer9912'),
            'role' => 'user',
        ]);
    }
}
