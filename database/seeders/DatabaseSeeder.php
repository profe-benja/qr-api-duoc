<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

          // Crear 10 usuarios
        \App\Models\Usuario::factory(10)->create()->each(function ($usuario) {
            // Por cada usuario, crear 2 clases
            \App\Models\Clase::factory(2)->create(['id_usuario' => $usuario->id])->each(function ($clase) {
                // Por cada clase, crear 5 asistencias
                \App\Models\Asistencia::factory(5)->create(['id_clase' => $clase->id])->each(function ($asistencia) {
                    // Por cada asistencia, crear 3 detalles de asistencia
                    \App\Models\DetalleAsistencia::factory(3)->create(['id_asistencia' => $asistencia->id]);
                });
            });
    });
    }
}
