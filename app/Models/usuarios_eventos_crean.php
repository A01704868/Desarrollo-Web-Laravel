<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_eventos_crean extends Model
{
    use HasFactory;

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';

    public $fillable = [
        'id_evento',
        'id_usuario',
        'esta_activo'
    ];
}
