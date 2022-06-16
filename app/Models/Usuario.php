<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';

    public $fillable = [
        "id_rol",
        "nombre",
        "correo_electronico",
        "celular",
        "empresa",
        "estado",
        "edad",
    ];
}
