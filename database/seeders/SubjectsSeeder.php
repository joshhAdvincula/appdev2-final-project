<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subjects;
use App\Models\User;

class SubjectsSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        $subjects = [
            ['name' => 'Application Development', 'description' => 'Developing applications using technology'],
            ['name' => 'Knowledge Audit', 'description' => 'Wise allocation of knowledge in the company'],
            ['name' => 'Quanty Method', 'description' => 'Simplex method with complexity in computation'],
            ['name' => 'Christian Teaching', 'description' => 'Religions are a major concern'],
            ['name' => 'Research Method', 'description' => 'Preparation for Capstone'],
        ];

        foreach ($subjects as $index => $subject) {
            $user = $users->get($index); // Get the user by index

            Subjects::create([
                'user_id' => $user->id,
                'name' => $subject['name'],
                'description' => $subject['description'],
            ]);
        }

    }

}
