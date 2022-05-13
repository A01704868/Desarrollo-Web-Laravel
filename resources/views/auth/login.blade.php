@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container pt-5">
        <div class="row d-flex justify-content-center">
            <h1 class="text-3xl text-center font-bold">Bienvenido APP Eventos</h1>
            <div class="col-sm-8">
                <form class="mt-4" method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Correo electrónico
                        </label>
                        <input type="email" class="form-control form-control-lg" placeholder="Correo electrónico" id="email"
                            name="email">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Contraseña
                        </label>
                        <input type="password" class="form-control form-control-lg" placeholder="Contraseña" id="password"
                            name="password">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
