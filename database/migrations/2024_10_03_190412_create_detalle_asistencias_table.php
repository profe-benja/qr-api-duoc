<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_asistencias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_asistencia');
            $table->unsignedBigInteger('id_alumno');
            $table->foreign('id_asistencia')->references('id')->on('asistencias');
            $table->foreign('id_alumno')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_asistencias');
    }
};
