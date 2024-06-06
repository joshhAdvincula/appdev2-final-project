<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materials;
use App\Models\Subjects;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            [
                'subjects_id' => subjects::where('name', 'Application Development')->first()->id,
                'title' => 'Appdev Reviewer',
                'content' => 'AppDev ppt for finals',
            ],
            [
                'subjects_id' => subjects::where('name', 'Knowledge Audit')->first()->id,
                'title' => 'KAFBA Reviewer',
                'content' => 'Strategy matters',
            ],
            [
                'subjects_id' => subjects::where('name', 'Quanty Method')->first()->id,
                'title' => 'Quamet Reviewer',
                'content' => 'Simplex method and Simple Topic',
            ],
            [
                'subjects_id' => subjects::where('name', 'Christian Teaching')->first()->id,
                'title' => 'CT6 Reviewer',
                'content' => 'Bugghism and Islam deck',
            ],
            [
                'subjects_id' => subjects::where('name', 'Research Method')->first()->id,
                'title' => 'Research Reviewer',
                'content' => 'Slides 35 to 111',
            ],
        ];

        foreach ($materials as $material) {
            Materials::create($material);
        }
    }
}
