<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::insert([
            'nama_user' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        User::insert([
            'nama_user' => 'User',
            'username' => 'user',
            'password' => Hash::make('user'),
        ]);

    }
}
