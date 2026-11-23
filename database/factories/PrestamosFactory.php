<?php

namespace Database\Factories;

use App\Models\Prestamos;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipos;

/**
 * @extends Factory<Prestamos>
 */
class PrestamosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'equipo_id'=>Equipos::factory(),
            'nombre_solicitante'=> fake()->name(),
            'fecha_prestamo'=>fake()->date(),
            'fecha_devolucion'=>fake()->date(),
            'estado'=>fake()->randomElement(['pendiente', 'devuelto', 'retrasado']),
        ];
    }
}
