@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <!-- /. ROW  -->

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Agregar un nuevo administrador
                </div>
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <div class="panel-body">
                    <form action="{{ route('dashboard-post-user') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control">
                            <p class="help-block">Ingresa el nombre completo del administrador</p>
                        </div>
                        <div class="form-group">
                            <label>Email de acceso</label>
                            <input type="email" name="email" class="form-control">
                            <p class="help-block">Ingresa el correo del administrador</p>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control">
                            <p class="help-block">Ingresa la contraseña del administrador</p>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
                        <a href="/dashboard" class="btn btn-secondary btn-sm">Cancelar</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- /. ROW  -->


@endsection
