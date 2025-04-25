<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Admin yang Akan Dimasukkan
        $username = 'admin@gmail.com';  // Ganti dengan username yang Anda inginkan
        $password = '12345678'; // Ganti dengan password yang Anda inginkan
        $name = 'Administrator'; // Ganti dengan nama yang Anda inginkan

        // Enkripsi Password
        $hashedPassword = Hash::make($password);

        // Cek Apakah Admin dengan Username Ini Sudah Ada
        $existingAdmin = Admin::where('username', $username)->first();

        if (!$existingAdmin) {
            // Buat Admin Baru Jika Belum Ada
            Admin::create([
                'username' => $username,
                'password' => $hashedPassword,
                'name' => $name,
            ]);

            $this->command->info("Admin user created with username: $username and password: $password");
        } else {
            // Update Password Jika Admin Sudah Ada (Opsional - Hati-hati!)
            // Jika Anda ingin selalu memperbarui password setiap kali seeder dijalankan,
            // uncomment kode di bawah ini.  Namun, ini bisa menyebabkan masalah jika Anda
            // memiliki admin lain yang menggunakan password yang berbeda.

            // $existingAdmin->password = $hashedPassword;
            // $existingAdmin->save();
            // $this->command->info("Admin user password updated for username: $username");

            $this->command->info("Admin user with username: $username already exists.");
        }
    }
}