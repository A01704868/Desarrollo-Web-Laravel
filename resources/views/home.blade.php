@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-5">Eventos</h1>

    <div class="container mt-4">
        <div class="row justify-content-center">
            {{-- Every event --}}
            <div class="col mb-md-3">
              <a href="#" style="text-decoration:none; color:black;" target="_blank">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/event-placeholder.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2rem;">Event Title</h4>
                        <b>Description</b>
                        <ul>
                          <li>Time and location</li>
                          <li>Directions</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>
            {{-- Every event --}}
            <div class="col">
              <a href="#" style="text-decoration:none; color:black;" target="_blank">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/event-placeholder.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2rem;">Event Title 2</h4>
                        <b>Description</b>
                        <ul>
                          <li>Time and location</li>
                          <li>Directions</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>
            {{-- Every event --}}
            <div class="col">
              <a href="#" style="text-decoration:none; color:black;" target="_blank">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/event-placeholder.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2rem;">Event Title 3</h4>
                        <b>Description</b>
                        <ul>
                          <li>Time and location</li>
                          <li>Directions</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>
            {{-- Every event --}}
            <div class="col">
              <a href="#" style="text-decoration:none; color:black;" target="_blank">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/event-placeholder.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2rem;">Event Title 4</h4>
                        <b>Description</b>
                        <ul>
                          <li>Time and location</li>
                          <li>Directions</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>
            {{-- Every event --}}
            <div class="col">
              <a href="#" style="text-decoration:none; color:black;" target="_blank">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/event-placeholder.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2rem;">Event Title 5</h4>
                        <b>Description</b>
                        <ul>
                          <li>Time and location</li>
                          <li>Directions</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>
            {{-- Every event --}}
            <div class="col">
              <a href="#" style="text-decoration:none; color:black;" target="_blank">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/event-placeholder.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2rem;">Event Title 6</h4>
                        <b>Description</b>
                        <ul>
                          <li>Time and location</li>
                          <li>Directions</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>

        </div>

        <div id="boton">
          <!-- Button trigger modal -->
        <button type="button" class="crear btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Nuevo evento
        </button>
        </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrar evento</h5>
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Registrar evento</button>
            </div>
          </div>
        </div>
      </div>

    </div>

@endsection

<style>
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
</style>
