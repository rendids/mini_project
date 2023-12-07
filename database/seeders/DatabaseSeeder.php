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
                'id' => '1',
                'role' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
            ],
            [
                'id' => '2',
                'role' => 'penyedia',
                'name' => 'penyedia1',
                'email' => 'penyedia@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678')
            ],
            [
                'id' => '3',
                'role' => 'user',
                'name' => 'user1',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678')
            ]
            ]);

            DB::table('penyedias')->insert([
                'id' => '1',
                'id_user' => '2',
                'layanan' => 'perbaiki sepeda',
                'harga' => '100000',
                'telp' => '089543558567',
                'alamat' => 'jl semangka',
                'foto' => 'fotopenyedia/foto_4.png',
                'status' => 'profilelengkap'
            ]);
    }
}
