<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterEventController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;


// Events
Route::resource('/eventos', EventoController::class)->middleware('auth.guest');
//eventos/1 put/post/delete/get
//eventos GET

// Team LDAW
Route::get('/equipo-ldaw', function () {
    return view('students.index');
});

// Dashboard
Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/dashboard/mi-cuenta', [UserController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

// Authentication

Route::redirect('/', '/login');

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
