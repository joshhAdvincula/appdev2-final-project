<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subjects;
use App\Models\Materials;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materials>
 */
class MaterialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Materials::class;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'content' => $this->faker->paragraph(),
            'subjects_id' => Subjects::factory(),
        ];
    }
}
