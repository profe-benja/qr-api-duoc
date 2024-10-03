<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleAsistencia extends Model
{
    use HasFactory;

    protected $table = 'detalle_asistencias';

    protected $fillable = ['id_asistencia', 'id_alumno'];

    public function asistencia()
    {
        return $this->belongsTo(Asistencia::class, 'id_asistencia');
    }

    public function alumno()
    {
        return $this->belongsTo(Usuario::class, 'id_alumno');
    }
}
