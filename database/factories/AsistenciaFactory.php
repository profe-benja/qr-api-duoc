<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_clase' => \App\Models\Clase::factory(), // Se relaciona con clases
            'code_qr' => $this->faker->uuid,
            'fecha' => $this->faker->date(),
        ];
    }
}
