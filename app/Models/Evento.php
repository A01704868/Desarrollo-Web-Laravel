<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Evento extends Model
{
    use HasFactory;

    //generar URL de la imagen
    public function coverPath(){
        return Storage::url('eventos_img/' . $this->imagen);
    }
}
