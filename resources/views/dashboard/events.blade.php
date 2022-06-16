@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <!-- /. ROW  -->

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de eventos
                </div>
                <a href="{{ route('dashboard-add-event') }}" class="btn btn-primary mt-4">
                    Agregar evento
                </a>
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Fecha del evento</th>
                                    <th>Hora</th>
                                    <th>Dirección</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($eventos as $evento)
                                    <tr>
                                        <td>
                                            <img src="{{ $evento->imagen }}" class="card-img-top"
                                                alt="{{ $evento->nombre_evento }}" width="100">
                                        </td>
                                        <td>{{ $evento->nombre_evento }}</td>
                                        <td>{{ $evento->descripcion }}</td>
                                        <td>{{ $evento->fecha_evento }}</td>
                                        <td>{{ $evento->hora_inicio }}</td>
                                        <td>{{ $evento->direccion }}</td>
                                        <td>
                                            <a href="{{ route('dashboard-events.edit', [$evento->id]) }}"
                                                class="btn btn-primary btn-sm">Editar</a>
                                            <form action="{{ route('dashboard-events.destroy', [$evento->id]) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-warning"> No hay eventos</div>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /. ROW  -->


@endsection
