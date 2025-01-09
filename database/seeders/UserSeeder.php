<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambah akun admin
        User::create([
            'username' => 'admin',
            'password' => Hash::make('password_admin'), // Gantilah dengan password yang kuat
            'role' => 'admin',
        ]);

        // Menambah akun user
        User::create([
            'username' => 'john_doe',
            'password' => Hash::make('password_user'), // Gantilah dengan password yang kuat
            'role' => 'user',
        ]);
    }
}
