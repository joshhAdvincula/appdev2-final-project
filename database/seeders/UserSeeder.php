<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();
        // $faker = Faker::create();

        // $users = [
        //     [
        //         'FirstName' => 'John',
        //         'LastName' => 'Doe',
        //         'email' => 'john.doe@example.com',
        //         'password' => Hash::make('password'),
        //     ],
        //     [
        //         'FirstName' => 'Jane',
        //         'LastName' => 'Smith',
        //         'email' => 'jane.smith@example.com',
        //         'password' => Hash::make('password'),
        //     ],
        //     [
        //         'FirstName' => 'Alice',
        //         'LastName' => 'Johnson',
        //         'email' => 'alice.johnson@example.com',
        //         'password' => Hash::make('password'),
        //     ],
        //     [
        //         'FirstName' => 'Bob',
        //         'LastName' => 'Brown',
        //         'email' => 'bob.brown@example.com',
        //         'password' => Hash::make('password'),
        //     ],
        //     [
        //         'FirstName' => 'Charlie',
        //         'LastName' => 'Davis',
        //         'email' => 'charlie.davis@example.com',
        //         'password' => Hash::make('password'),
        //     ],
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }
    }
}
