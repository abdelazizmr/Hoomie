<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => random_int(1,10), 
            'description' => $this->faker->paragraph,
            'budget' => $this->faker->randomFloat(2, 100, 1000),
            'move_in' => $this->faker->date(),
            'city_id' => random_int(1,20), 
            'status_id' => random_int(1,5), 
        ];
    }
}
