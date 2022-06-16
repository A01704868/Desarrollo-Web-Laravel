<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Usuario;
use App\Models\usuarios_eventos_crean;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('nombre_evento', 'asc')->get();

        if (auth()->user()->role === 'admin') {
            return view("dashboard.events", ["eventos" => $eventos]);
        } else {
            return view("home", ["eventos" => $eventos]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, int $id)
    {
        $usuario = [
            "id_rol" => 2,
            "nombre" => $request->nombre,
            "correo_electronico" => $request->email,
            "celular" => $request->telefono,
            "empresa" => $request->empresa,
            "estado" => $request->estado,
            "edad" => $request->edad
        ];
        
        $usuarioCreado = Usuario::create($usuario);
        $usuarioEvento = [
            'id_usuario' => $usuarioCreado->id,
            'id_evento' => $id,
            'esta_activo' => is_null($request->asistencia) ? 0 : 1
        ];

        usuarios_eventos_crean::create($usuarioEvento);
        return $this->show($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::where('id', '=', $id)
            ->limit(1)
            ->get();

        $usuarios = Usuario::join(
            'usuarios_eventos_creans',
            'usuarios_eventos_creans.id_usuario',
            '=', 'usuarios.id')
            ->select(
                'usuarios.nombre',
                'usuarios.id',
                'usuarios.empresa',
                'usuarios.correo_electronico',
                'usuarios_eventos_creans.id_evento')
            ->where('usuarios_eventos_creans.id_evento', '=', $id)
            ->where('usuarios_eventos_creans.esta_activo', '=', 1)
            ->get();

        $data = [
            "evento" => $evento[0],
            "usuarios" => $usuarios
        ];

        return view("events.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view("dashboard.event", ["evento" => $evento]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $email = $request->email;
        usuarios_eventos_crean::join(
            'usuarios',
            'usuarios.id',
            '=', 'id_usuario'
        )->where('correo_electronico', '=', $email)->delete();
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->route('dashboard-events.index')->with('success', 'Eliminado');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $eventos = Evento::where('nombre_evento', 'LIKE', '%'.$search_text.'%')->get();

        return view('events.search', compact('eventos'));
    }

    public function unsub(Request $request, $id)
    {
        print("hola");
        $email = $request->email;
        $usuario = Usuario::where('correo_electronico', '=', $email)
            ->limit(1)
            ->get();

        $usuarioRegistroBorrado = usuarios_eventos_crean::where('id_usuario', '=', $usuario->id);
        $usuarioRegistroBorrado->delete();
        // print_r($usuarioRegistroBorrado);
        // return $this->show($id);
    }
}
