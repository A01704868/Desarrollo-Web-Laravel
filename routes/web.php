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
Route::post('/eventos/{id}', [EventoController::class, 'store'])
    ->name('add-user-event');

Route::patch('/eventos/{id}', [EventoController::class, 'update'])
    ->name('unsub-event');

Route::get('/search', [EventoController::class, 'search']);

Route::resource('/eventos', EventoController::class)
    ->middleware('auth.user');

Route::get('/category', [EventoController::class, 'category']);
// Route::resource('/eventos', EventoController::class)->middleware('auth.user');
//eventos/1 put/post/delete/get
//eventos GET

// Usuarios
Route::resource('/usuariosRegistrados', UsuariosController::class)
->middleware('auth.user');
// Route::get('/events/{id}', [UsuariosController::class, 'show'])->middleware('auth.user');


// Team LDAW
Route::get('/equipo-ldaw', function () {
    return view('students.index');
})
    ->name('equipo-ldaw');

// Dashboard
Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/dashboard/usuarios', [UserController::class, 'showAll'])
    ->middleware('auth.admin')
    ->name('dashboard-users');

Route::get('/dashboard/usuarios/add', [UserController::class, 'addAdmin'])
    ->middleware('auth.admin')
    ->name('dashboard-add-user');

Route::post('/dashboard/usuarios/add', [UserController::class, 'postAdmin'])
    ->middleware('auth.admin')
    ->name('dashboard-post-user');

Route::get('/dashboard/usuarios/{id}', [UserController::class, 'show'])
    ->middleware('auth.admin')
    ->name('dashboard-show-user');

Route::patch('/dashboard/usuarios/{id}', [UserController::class, 'edit'])
    ->middleware('auth.admin')
    ->name('dashboard-edit-user');

Route::delete('/dashboard/usuarios/{id}', [UserController::class, 'destroy'])
    ->middleware('auth.admin')
    ->name('dashboard-delete-user');
Route::get(
    '/dashboard/add/eventos',
    [EventoController::class, 'addEvent']
)
    ->middleware('auth.admin')
    ->name('dashboard-add-event');
Route::post(
    '/dashboard/add/eventos',
    [EventoController::class, 'createEvent']
)
    ->middleware('auth.admin')
    ->name('dashboard-post-event');
Route::resource(
    '/dashboard/eventos',
    EventoController::class,
    ['names' => 'dashboard-events']
)
    ->middleware('auth.admin');



Route::get('/dashboard/mi-cuenta', [UserController::class, 'showAccount'])
    ->middleware('auth.admin')
    ->name('mi-cuenta');

Route::patch('/dashboard/mi-cuenta/{id}', [UserController::class, 'update'])
    ->middleware('auth.admin')
    ->name('mi-cuenta-update');
