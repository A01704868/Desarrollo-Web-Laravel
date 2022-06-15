@extends('layouts.app')

@section('title', 'RegisterEvent')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-3xl text-center font-bold">Registrar evento</h1>
            <div class="col-sm-8">
                <form class="mt-4" method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Nombre
                        </label>
                        <input type="text" placeholder="Nombre del evento" class="form-control form-control-lg" id="nameEvent"
                            name="nameEvent">
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
                        <input type="text" class="form-control form-control-lg" placeholder="Siglas del evento" id="siglas"
                            name="siglas">
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
                        <input type="text" class="form-control form-control-lg" placeholder="Contraseña" id="descripcion"
                            name="descripcion">
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
                        <input type="number" class="form-control form-control-lg" placeholder="Duración del evento(horas)"
                            id="duracion" name="duracion">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Cupo
                        </label>
                        <input type="number" class="form-control form-control-lg" placeholder="Cupo del evento"
                            id="cupo" name="cupo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Costo
                        </label>
                        <input type="number" class="form-control form-control-lg" placeholder="Costo del evento"
                            id="costo" name="costo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Ubicación
                        </label>
                        <input type="text" class="form-control form-control-lg" placeholder="Ubicación del evento"
                            id="ubicacion" name="ubicacion">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg">Registrar evento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
