<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(10),
            'department' => fake()->randomElement(['Engineering', 'Human Resources', 'Sales']),
            'location' => fake()->country(),
            'location_type' => fake()->randomElement(['remote', 'hybrid', 'onsite']),
            'company_id' => 1
        ];
    }
}
