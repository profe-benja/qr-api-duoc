<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo', 'perfil', 'token'];

    public function clases()
    {
        return $this->hasMany(Clase::class, 'id_usuario');
    }
}
