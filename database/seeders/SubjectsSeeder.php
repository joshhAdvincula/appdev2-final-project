<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subjects;

class SubjectsSeeder extends Seeder
{
    public function run()
    {
        $subjects = [
            ['name' => 'Application Development', 'description' => 'Developing a different type of application with the use of technology'],
            ['name' => 'Knowledge Audit', 'description' => 'Wise allocation of knowledge in the company'],
            ['name' => 'Quanty Method', 'description' => 'simplex proble but has complexity in computation'],
            ['name' => 'Christian Teaching', 'description' => 'Religions is the major concern'],
            ['name' => 'Research Method', 'description' => 'Preparation for Capstone']
        ];

        foreach ($subjects as $subject) {
            Subjects::create($subject);
        }
    }

}
