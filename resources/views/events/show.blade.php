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
                                {{-- <h1 class="text-3xl text-center font-bold">Registrar evento</h1> --}}
                                <div class="col-sm-8">
                                    <form class="mt-4" method="POST" action="">
                                        @csrf

                                        <div class="modal-footer" id="opciones">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
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


    <<<<<<< HEAD=======<section>
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
                        <h5 class="modal-title" id="exampleModalLabel">Registro al evento</h5>
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
                                                ¿Se quiere registrar?
                                            </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Si quiero
                                                </label>
                                            </div>
                                            @error('flexRadioDefault1')
                                                <div class="alert alert-danger" role="alert">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No quiero
                                                </label>
                                            </div>
                                            @error('flexRadioDefault2')
                                                <div class="alert alert-danger" role="alert">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
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


                    >>>>>>> 5dd4ef35f575aa27fb7408f4453f1f82a07af185
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
