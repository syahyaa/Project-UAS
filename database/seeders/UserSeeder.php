<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'admin',
        'email' => 'admin123@gmail.com',
        'password' => 'admin123',
        'role' => 'admin',
        ]);

        User::create([
        'name' => 'aul',
        'email' => 'aul123@gmail.com',
        'password' => 'aul123',
        'role' => 'user',
        ]);
    }
}
