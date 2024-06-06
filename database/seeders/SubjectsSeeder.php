<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subjects;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            ['name' => 'Math', 'description' => 'Mathematics subject'],
            ['name' => 'Science', 'description' => 'Science subject'],
            ['name' => 'History', 'description' => 'History subject'],
            ['name' => 'English', 'description' => 'English subject'],
        ];

        foreach ($subjects as $subject) {
            Subjects::create($subject);
        }
    }
}
