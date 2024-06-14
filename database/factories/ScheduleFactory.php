<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(),
            "address" => fake()->address(),
            "description" => fake()->text(),
            "pastor" => fake()->name(),
            "topic" => fake()->sentence(),
            "start_time" => fake()->time(),
            "end_time" => fake()->time(),
            "date" => fake()->date(),
        ];
    }
}
