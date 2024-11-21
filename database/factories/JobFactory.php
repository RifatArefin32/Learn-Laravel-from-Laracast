<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'employer_id' => Employer::factory(),
            'description' => $this->faker->paragraph(3),
            'location' => $this->faker->city(),
            'salary' => $this->faker->numberBetween(30000, 120000), // Salary in range
        ];
    }
}
