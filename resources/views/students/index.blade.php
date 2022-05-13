<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Equipo LDAW</title>

        <!-- Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <title>Equipo de bloque</title>
</head>

<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Volver al proyecto</a>
        </li>
    </ul>
    <div class="container mt-4">
        <div class="row justify-content-center">
            {{-- Title --}}
            <h1 class="text-center my-4">Equipo LDAW</h1>
            {{-- Every student --}}
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/Daniel.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Daniel Cu Sánchez</h5>
                        <span class="badge bg-secondary">ISC</span>
                        <b>A01703613</b>
                        <p class="card-text">
                            Emprendedor orgullosamente mexicano, apasionado por la programación y telecomunicaciones 🚀
                        </p>

                        <a href="https://www.instagram.com/danielcu.sanchez/" class="btn btn-primary" target="_blank">
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
            {{-- Every student --}}
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/Sofia.JPG') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paula Sofía Soto</h5>
                        <span class="badge bg-secondary">ISC</span>
                        <b>A01620155</b>
                        <p class="card-text">
                            Me encanta react 🤟
                        </p>

                        <a href="https://www.facebook.com/soto.ayala.paula.sofia/" class="btn btn-primary" target="_blank">
                            Facebook
                        </a>
                    </div>
                </div>
            </div>
            {{-- Every student --}}
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/Alex.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Alexander Delgado Nuñez</h5>
                        <span class="badge bg-secondary">ISC</span>
                        <b>A01704868</b>
                        <p class="card-text">
                            El más crack en laravel 😀
                        </p>

                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-primary" target="_blank">
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
            {{-- Every student --}}
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/students/Richi.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            Ricardo Arturo Camarena Colón
                        </h5>
                        <span class="badge bg-secondary">ISC</span>
                        <b>A01703831</b>
                        <p class="card-text">
                            Artista súper rifado 😉
                        </p>

                        <a href="https://www.instagram.com/richicamarena/" class="btn btn-primary" target="_blank">
                            Instagram
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
