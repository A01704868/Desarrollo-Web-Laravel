<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuariosController;



// Authentication

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


// Events
Route::redirect('/', '/eventos');

Route::get('/search', [EventoController::class, 'search']);
Route::resource('/eventos', EventoController::class)->middleware('auth.user');
//eventos/1 put/post/delete/get
//eventos GET

// Usuarios
Route::resource('/usuariosRegistrados', UsuariosController::class)->middleware('auth.user');


// Team LDAW
Route::get('/equipo-ldaw', function () {
    return view('students.index');
})
    ->name('equipo-ldaw');

// Dashboard
Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::resource(
    '/dashboard/eventos',
    EventoController::class,
    ['names' => 'dashboard-events']
)
    ->middleware('auth.admin');

Route::get('/dashboard/mi-cuenta', [UserController::class, 'show'])
    ->middleware('auth.admin')
    ->name('mi-cuenta');

Route::patch('/dashboard/mi-cuenta/{id}', [UserController::class, 'update'])
    ->middleware('auth.admin')
    ->name('mi-cuenta-update');
