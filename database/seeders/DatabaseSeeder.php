<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subjects;
use App\Models\Materials;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SubjectsSeeder::class);  // Call the SubjectsSeeder

        // Create users
        User::factory(5)->create();

        // Create materials with existing subjects and users
        $subjects = Subjects::all();

        foreach ($subjects as $subject) {
            Materials::factory(5)->create([
                'subjects_id' => $subject->id,
                'users_id' => User::inRandomOrder()->first()->id,
            ]);
        }
    }
}
