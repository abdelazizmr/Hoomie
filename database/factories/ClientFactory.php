<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => random_int(1,10), // You may adjust this based on your user creation logic
            'number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'age' => $this->faker->numberBetween(18, 60),
            'gender' => $this->faker->randomElement(['male', 'female'])
        ];
    }
}
