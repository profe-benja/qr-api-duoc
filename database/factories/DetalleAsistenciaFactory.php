<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleAsistencia>
 */
class DetalleAsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_asistencia' => \App\Models\Asistencia::factory(), // Se relaciona con asistencias
            'id_alumno' => \App\Models\Usuario::factory(), // Se relaciona con usuarios (alumnos)
        ];
    }
}
