<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // user table
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '09777888666',
            'address' => 'Taunggyi',
            'role' => 'admin',
            'gender' => 'male',
            'password' => Hash::make('admin1234'),
        ]);
    }
}
