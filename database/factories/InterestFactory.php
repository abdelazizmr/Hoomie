<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interest>
 */
class InterestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'hobbies' => $this->faker->sentence,
            'smoking' => $this->faker->boolean,
            'introvert' => $this->faker->boolean,
            'food_separated' => $this->faker->boolean,
            'cleaning' => $this->faker->boolean,
            'religion' => $this->faker->randomElement(['Christianity', 'Islam', 'Judaism', 'Buddhism', 'Other']),
            'wifi' => $this->faker->boolean,
            'visiting_family_times' => random_int(1,10),
        ];
    }
}
