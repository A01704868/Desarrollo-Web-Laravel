@extends('layouts.app')

@section('title', 'Event Info')

@section('content')

<div class="infoHeader">
  <h1 style="color: white;">Event Title</h1>
</div>

<section id="descriptionEvent">
  <div class="container-wide">
    <h2 class="mb-5">Full Description</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</section>

<section id="mapLocation">
  <div style="width:100%">
    <h2 class="mb-5 text-center">Location</h2>
    <img src="{{ asset('/images/map-placeholder.jpg') }}" style="width: 100%;">
  </div>
</section>


@endsection

<style>

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
