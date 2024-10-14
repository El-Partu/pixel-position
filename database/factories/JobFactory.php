<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Schedule;

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
    public function definition(): array
    {
        return [
            "employer_id" => Employer::factory(), // Creates a new Employer for each Job
            "title" => $this->faker->jobTitle, // Use $this->faker instead of fake()
            "salary" => $this->faker->randomElement(["$50,000", "$60,000", "30,000", "40,000"]), // Store as a number
            "location" => "remote",
            "url" => $this->faker->url,
            "featured" => false,
            "schedule" => "Full Time",
        ];
    }
}
