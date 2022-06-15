<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use App\Models\Usuarios_eventos_reservan;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $eventos = Evento::get();
        $usuarios = User::get();
        $registros = Usuarios_eventos_reservan::get();
        return view('dashboard.index', [
            "eventos" => sizeof($eventos),
            "registros" => sizeof($registros),
            "usuarios" => sizeof($usuarios)
        ]);
    }

    public function account()
    {

        return view('users.index');
    }
}
