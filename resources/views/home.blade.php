@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
@endpush

@section('content')

    <h1 class="text-5xl text-center pt-5">Eventos</h1>
    <div class="container mt-4">

    <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar Eventos" name="query"></input>
            <button class="btn btn-outline-success my-2 my-sm-0" style="display: none;" type="submit">Buscar</button>
    </form>
    <br>
    <div class="row justify-content-center">      
    </div>
        <div class="row justify-content-center event-container">
            {{-- Every event --}}
            @forelse($eventos as $evento)
                <div class="col-md-4 mb-md-3">
                    <a href="/eventos/{{ $evento->id_evento }}" style="text-decoration:none; color:black;">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $evento->imagen }}" class="card-img-top" alt="{{ $evento->nombre_evento }}">
                            <div class="card-body">
                                <h4 class="card-title" style="margin-bottom: 2rem;">{{ $evento->nombre_evento }}</h4>
                                <b>{{ $evento->descripcion }}</b>
                                <ul>
                                    <li>Fecha: {{ $evento->fecha_evento }}</li>
                                    <li>Horario: {{ $evento->hora_inicio }} - {{ $evento->hora_final }}</li>
                                    <li>Direccion: {{ $evento->direccion }}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="alert alert-warning"> No hay eventos</div>
            @endforelse

        </div>

        <div id="boton">
            <!-- Button trigger modal -->
            <button type="button" class="crear btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nuevo evento
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                {{-- <h1 class="text-3xl text-center font-bold">Registrar evento</h1> --}}
                                <div class="col-sm-8">
                                    <form class="mt-4" method="POST" action="">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Nombre
                                            </label>
                                            <input type="text" placeholder="Nombre del evento"
                                                class="form-control form-control-lg" id="nameEvent" name="nameEvent">
                                            @error('nameEvent')
                                                <div class="alert alert-danger" role="alert">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Siglas
                                            </label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Siglas del evento" id="siglas" name="siglas">
                                            @error('siglas')
                                                <div class="alert alert-danger" role="alert">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Descripción
                                            </label>
                                            <input type="text" class="form-control form-control-lg" placeholder="Contraseña"
                                                id="descripcion" name="descripcion">
                                            @error('descripcion')
                                                <div class="alert alert-danger" role="alert">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Duración
                                            </label>
                                            <input type="number" class="form-control form-control-lg"
                                                placeholder="Duración del evento(horas)" id="duracion" name="duracion">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Cupo
                                            </label>
                                            <input type="number" class="form-control form-control-lg"
                                                placeholder="Cupo del evento" id="cupo" name="cupo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Costo
                                            </label>
                                            <input type="number" class="form-control form-control-lg"
                                                placeholder="Costo del evento" id="costo" name="costo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">
                                                Ubicación
                                            </label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Ubicación del evento" id="ubicacion" name="ubicacion">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Registrar evento</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            @endsection

            <style>
                @-webkit-keyframes slide-in-bottom {
                    0% {
                        -webkit-transform: translateY(1000px);
                        transform: translateY(1000px);
                        opacity: 0;
                    }

                    100% {
                        -webkit-transform: translateY(0);
                        transform: translateY(0);
                        opacity: 1;
                    }
                }

                @keyframes slide-in-bottom {
                    0% {
                        -webkit-transform: translateY(1000px);
                        transform: translateY(1000px);
                        opacity: 0;
                    }

                    100% {
                        -webkit-transform: translateY(0);
                        transform: translateY(0);
                        opacity: 1;
                    }
                }

                .crear {
                    position: fixed;
                    width: 30vw;
                    bottom: 3%;
                    left: 35vw;
                    z-index: 2;

                    animation-name: slide-in-bottom;
                    animation-duration: 0.75s;
                }

                #boton {
                    width: 49%;
                    font-size: 1rem;
                    display: flex;
                    justify-content: center;
                }
            </style>
