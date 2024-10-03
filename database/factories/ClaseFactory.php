<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clase>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'sigla' => strtoupper($this->faker->lexify('????')),
            'code' => Str::random(10),
            'id_usuario' => \App\Models\Usuario::factory(), // Se relaciona con usuarios
        ];
    }
}
