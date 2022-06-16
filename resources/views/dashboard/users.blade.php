@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <!-- /. ROW  -->

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de usuarios
                </div>
                <a href="{{ route('dashboard-add-user') }}" class="btn btn-primary mt-4">
                    Agregar usuario
                </a>
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($usuarios as $usuario)
                                    {{ $usuario }}
                                    <tr>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->role }}</td>
                                        <td>
                                            <a href="{{ route('dashboard-edit-user', [$usuario->id]) }}"
                                                class="btn btn-primary btn-sm">Editar</a>
                                            <form action="{{ route('dashboard-delete-user', [$usuario->id]) }}"
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
