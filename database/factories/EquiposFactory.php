<?php

namespace Database\Factories;

use App\Models\Equipos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Equipos>
 */
class EquiposFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'    => fake()->word(),
            'codigo'    => fake()->unique()->numerify('EQ-###'),
            'categoria' => fake()->randomElement(['Portátil', 'Proyector', 'Cámara', 'Micrófono', 'Altavoz']),
            'estado'    => fake()->randomElement(['Disponible', 'En Reparación', 'No Disponible']),
        ];
    }
}
