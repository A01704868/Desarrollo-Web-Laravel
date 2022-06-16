<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use App\Models\eventos_categorias;
use App\Models\Usuario;
use App\Models\usuarios_eventos_crean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorias = Categoria::orderBy('id', 'asc')->get();
        $eventos = Evento::orderBy('id', 'asc')->get();

        foreach($eventos as $event){
            $response = Http::get('http://api.weatherapi.com/v1/current.json?key=a63b11cdcae34a9792c31001221606&q='.$event['direccion'].'&aqi=no')['current'];

            $event->setAttribute('temperatura', $response['temp_c']);
            $event->setAttribute('humidity', $response['humidity']);
        }

        if (auth()->user()->role === 'admin') {
            return view("dashboard.events", ["eventos" => $eventos]);
        } else {
            return view("home", ["eventos" => $eventos, "categorias" => $categorias]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEvent()
    {
        return view("dashboard.eventCreate");
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
    
    public function createEvent(Request $request)
    {
        $evento = new Evento();
        $evento->nombre_organizador = $request->nombre_organizador;
        $evento->celular_organizador = $request->celular_organizador;
        $evento->nombre_evento =  $request->nombre_evento;
        $evento->imagen =  $request->imagen;
        $evento->fecha_evento =  $request->fecha_evento;
        $evento->hora_inicio =  $request->hora_inicio;
        $evento->hora_final =  $request->hora_final;
        $evento->descripcion =  $request->descripcion;
        $evento->direccion =  $request->direccion;
        $evento->esta_activo =  true;
        $evento->fecha_creado = date('Y-m-d');
        $evento->fecha_actualizado = date('Y-m-d');
        $evento->save();
        return redirect()->route('dashboard-events.index')->with('success', 'Evento agregado!');
    }

    public function attendance(Request $request, $eventoId)
    {
        $userId = auth()->user()->id;
        $eventoRegistro = usuarios_eventos_crean::where('id_usuario', $userId)
            ->where('id_evento', $eventoId)
            ->get();

        return view("events.show", ["eventoRegistro" => $eventoRegistro]);
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
            ->get()[0];

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
            "evento" => $evento,
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
        $categorias = Categoria::orderBy('id', 'asc')->get();
        $eventos = Evento::where('nombre_evento', 'LIKE', '%' . $search_text . '%')->get();

        foreach($eventos as $event){
            $response = Http::get('http://api.weatherapi.com/v1/current.json?key=a63b11cdcae34a9792c31001221606&q='.$event['direccion'].'&aqi=no')['current'];

            $event->setAttribute('temperatura', $response['temp_c']);
            $event->setAttribute('humidity', $response['humidity']);
        }

        return view('events.search', ["eventos" => $eventos, "categorias" => $categorias]);
    }

    public function category()
    {
        $categorias = Categoria::orderBy('id', 'asc')->get();

        $eventos = Evento::whereHas('categorias', function ($q) {
            $q->where('categoria_id', '=', $_GET['category']);
        })->get();

        foreach($eventos as $event){
            $response = Http::get('http://api.weatherapi.com/v1/current.json?key=a63b11cdcae34a9792c31001221606&q='.$event['direccion'].'&aqi=no')['current'];

            $event->setAttribute('temperatura', $response['temp_c']);
            $event->setAttribute('humidity', $response['humidity']);
        }

        return view('events.category', ["eventos" => $eventos, "categorias" => $categorias]);
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
