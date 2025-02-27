<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estadio>
 */
class EstadioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->unique()->city.' Stadium',
            'ciudad' => fake()->unique()->city,
            'capacidad' => fake()->numberBetween(10000, 100000),
        ];
    }
}
