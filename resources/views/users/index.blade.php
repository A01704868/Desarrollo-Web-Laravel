@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
    <div class="container-xl px-4 mt-4">
        <!-- Account page -->
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Foto perfil</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ asset('/images/students/Daniel.jpg') }}" height="300" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG menos que 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Cambiar imagen</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detalle de cuenta</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nombre</label>
                                    <input class="form-control" id="inputFirstName" type="text"
                                        placeholder="Enter your first name" value="Daniel">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Apellido</label>
                                    <input class="form-control" id="inputLastName" type="text"
                                        placeholder="Enter your last name" value="Cu">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="danielcu@alternet.com.mx">
                            </div>

                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
