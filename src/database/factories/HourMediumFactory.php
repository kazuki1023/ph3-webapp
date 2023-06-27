<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HourMedium>
 */
class HourMediumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time_id' => $this->faker->numberBetween(1, 30),
            'content_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
