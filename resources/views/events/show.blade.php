@extends('layouts.app')

@section('title', 'Event Info')

@section('content')

    <div class="infoHeader">
        <h1 style="color: white;">{{ $evento->nombre_evento }}</h1>
    </div>
    <section id="descriptionEvent">
        <div class="container-wide">
            <h2 class="mb-5">Detalle de evento</h2>
            <p>
                {{ $evento->descripcion }}
            </p>
        </div>
    </section>

    <section>
        <div class="container-wide" style="padding-top: 4rem">
            <!-- Button trigger modal -->

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Lista de registados
            </button>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                Eliminar Registro
            </button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lista de registrados al evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Correo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $user)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $user->nombre }}</td>
                                                <td>{{ $user->empresa }}</td>
                                                <td>{{ $user->correo_electronico }}</td>
                                            </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>

                                <form class="mt-4" method="" action="">
                                    @csrf
                                    <div class="modal-footer" id="opciones">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mapLocation">
        <div style="width:100%">
            <h2 class="mb-5 text-center">Location</h2>
            <img src="{{ asset('/images/map-placeholder.jpg') }}" style="width: 100%;">
        </div>
    </section>

    <section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrase al evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-8">
                                    <form class="mt-4" method="POST" action="{{ route('unsub-event', ['id' => $evento->id]) }}">
                                        @method('PATCH')
                                        @csrf
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input name="email" type="email" class="form-control" placeholder="Ingresa tu correo" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer" id="opciones">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Eliminar Registro</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="boton">
            <!-- Button trigger modal -->
            <button type="button" class="crear btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Registrarse al evento
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Asistencia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-8">
                                    <form class="mt-4" method="POST" action="{{ route('add-user-event', ['id' => $evento->id]) }}">
                                        @csrf
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                                <input name="nombre" type="text" class="form-control" placeholder="Carlos Rodriguez" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input name="email" type="email" class="form-control" placeholder="name@example.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                                                <input name="telefono" type="number" class="form-control" placeholder="477-465-7788" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Estado</label>
                                                <input name="estado" type="text" class="form-control" placeholder="Guanajuato" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Edad</label>
                                                <input name="edad" type="number" class="form-control" placeholder="25" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Empresa</label>
                                                <input name="empresa" type="text" class="form-control" placeholder="General Electric" required>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="asistencia">
                                                <label class="form-check-label" for="asistencia">
                                                    Quiero Asistir
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer" id="opciones">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Registrar evento</button>
                                        </div>
                                </div>
                            </div>
    </section>



    </div>
    </div>

@endsection

<style>
    #opciones {
        display: flex;
        align-items: right;
        justify-content: center;

        /* position: absolute; */
    }

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


    .infoHeader {
        width: 100%;
        position: relative;
        height: 20rem;
        background-image: url("{{ asset('/images/students/event-placeholder.jpeg') }}");
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-wide {
        max-width: 1280px;
        width: 90%;
        margin-left: auto;
        margin-right: auto;

    }

    #descriptionEvent {
        padding-top: 4rem;
    }

    #mapLocation {
        padding-top: 8rem;
    }
</style>
