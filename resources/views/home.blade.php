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

    </div>

@endsection
