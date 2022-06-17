@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2"
                        src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" height="300"
                        alt="">
                    <!-- Profile picture help block-->
                    {{-- <div class="small font-italic text-muted mb-4">JPG or PNG menos que 5 MB</div> --}}
                    <!-- Profile picture upload button-->
                    {{-- <button class="btn btn-primary" type="button">Cambiar imagen</button> --}}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Detalle de cuenta</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('mi-cuenta-update', ['id' => $user->id]) }}">
                        @method('PATCH')
                        @csrf
                        @if (session('success'))
                            <h6 class="alert alert-success">{{ session('success') }}</h6>
                        @endif
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Nombre</label>
                                <input class="form-control" id="inputFirstName" type="text"
                                    placeholder="Enter your first name" value="{{ $user->name }}" name="name">
                            </div>

                        </div>
                        <!-- Form Group (email address)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" type="email"
                                placeholder="Enter your email address" value="{{ $user->email }}" name="email">
                        </div>



                        <!-- Save changes button-->
                        <button class="btn btn-primary mt-4" type="submit">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
