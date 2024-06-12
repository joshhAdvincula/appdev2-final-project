<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materials;
use App\Models\Subjects;
use App\Models\User;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $subjects = Subjects::all();

        $materials = [
            'Application Development' => 'AppDev ppt for finals',
            'Knowledge Audit' => 'Strategy matters',
            'Quanty Method' => 'Simplex method and Simple Topic',
            'Christian Teaching' => 'Bugghism and Islam deck',
            'Research Method' => 'Slides 35 to 111',
        ];

        foreach ($subjects as $subjects) {
            Materials::create([
                'subjects_id' => $subjects->id,
                'title' => $subjects->name . ' Reviewer',
                'content' => $materials[$subjects->name] ?? 'Content not available',
            ]);
        }
    }
}
