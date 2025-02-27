<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->unique()->company,
            'titulos' => fake()->numberBetween(0, 50),
            'estadio_id' => \App\Models\Estadio::factory(), // Crea un estadio mediante su factoría
            'escudo' => 'escudos/default.png', // Imagen por defecto
          ];
    }
}
