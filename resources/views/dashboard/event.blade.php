@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <!-- /. ROW  -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Editar evento</h2>
        </div>
        <div class="col-md-12 mt-4">
            <div class="jumbotron">
                <h1>{{ $evento->nombre_evento }}</h1>
                <p>
                    {{ $evento->descripcion }}
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" role="button">
                        Guardar
                    </a>
                </p>
            </div>
        </div>
    </div>


@endsection
