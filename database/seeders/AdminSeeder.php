<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin; // Atau \App\Models\User jika Anda menggunakan tabel users

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([ // Atau User::create jika menggunakan tabel users
            'name' => 'Goklas H.A. Pandjaitan',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'), // Ganti 'password' dengan password yang lebih kuat
        ]);
    }
}