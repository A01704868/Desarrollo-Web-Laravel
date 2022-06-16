@extends('layouts.dashboard')

@section('title', 'Registrar el evento')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-3xl text-center font-bold">Registrar evento</h1>
            <div class="col-sm-8">
                <form class="mt-4" method="POST" action="{{ route('dashboard-post-event') }}">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Nombre organizador
                        </label>
                        <input type="text" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="nombre_organizador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Celular celular
                        </label>
                        <input type="text" placeholder="Celular celular" class="form-control form-control-lg" id="nameEvent"
                            name="celular_organizador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Nombre del evento
                        </label>
                        <input type="text" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="nombre_evento">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            imagen del evento
                        </label>
                        <input type="text" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            fecha evento del evento
                        </label>
                        <input type="date" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="fecha_evento">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            hora inicio evento del evento
                        </label>
                        <input type="time" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="hora_inicio">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            hora final evento del evento
                        </label>
                        <input type="time" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="hora_final">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            direccion
                        </label>
                        <input type="text" placeholder="Direccion del evento" class="form-control form-control-lg"
                            id="nameEvent" name="direccion">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            descripcion
                        </label>
                        <input type="text" placeholder="Nombre del evento" class="form-control form-control-lg"
                            id="nameEvent" name="descripcion">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg">Crear evento</button>
                        <a href="/dashboard" class="btn btn-secondary btn-lg">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
