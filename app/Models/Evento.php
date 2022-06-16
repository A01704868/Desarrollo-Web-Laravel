<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Evento extends Model
{
    // protected $primaryKey = 'id_evento';
    use HasFactory;

    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_actualizado';

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'eventos_categorias');
    }
}
