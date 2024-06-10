<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'FirstName' => 'John',
            'LastName' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'FirstName' => 'Jane',
            'LastName' => 'Smith',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
