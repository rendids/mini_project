<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            [
                'role' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
            ],
            [
                'role' => 'penyedia',
                'name' => 'penyedia1',
                'email' => 'penyedia@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678')
            ],
            [
                'role' => 'user',
                'name' => 'user1',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678')
            ]
            ]);
    }
}
