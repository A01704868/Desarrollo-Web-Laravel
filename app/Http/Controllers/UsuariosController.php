<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\usuarios_eventos_crean;

class UsuariosController extends Controller
{
    /**
     * index para mostrar
     * store para insertar
     * update actualizar
     * destroy para borrar
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $usuarios = Usuario::whereRaw('age > ? and votes = 100', [25])->get();
        // $evento = Usuario::where('id_evento', $id)->get();
        // info($evento);
        $usuarios = Usuario::addSelect(['nombre' => usuarios_eventos_crean::select('id_evento')
        ->whereColumn('id_usuario', 'id_usuario')
        ->where('usuarios_eventos_reservan.esta_activo','=','1')
        ->where('id_evento',$id)
        ->where('id_evento','=',$id)
        ])->get();

        return view("users.home", ["usuarios" => $usuarios]);
    }
}
