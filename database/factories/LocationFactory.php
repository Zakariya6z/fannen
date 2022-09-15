<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(1),
            'adress' => fake()->sentence(1),
            'geo' => fake()->sentence(1),
            'link' => fake()->sentence(1),
            'contact' => fake()->sentence(1),
        ];
    }
}
