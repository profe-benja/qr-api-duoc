<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = ['id_clase', 'code_qr', 'fecha'];

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'id_clase');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleAsistencia::class, 'id_asistencia');
    }
}
