<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin Kedai Bunda',
            'email' => 'admin@kedaibunda.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'aktif' => true,
        ]);

        // Kasir 1
        User::create([
            'name' => 'Kasir 1',
            'email' => 'kasir1@kedaibunda.com',
            'password' => Hash::make('kasir123'),
            'role' => 'kasir',
            'aktif' => true,
        ]);

        // Kasir 2
        User::create([
            'name' => 'Kasir 2',
            'email' => 'kasir2@kedaibunda.com',
            'password' => Hash::make('kasir123'),
            'role' => 'kasir',
            'aktif' => true,
        ]);
    }
}
