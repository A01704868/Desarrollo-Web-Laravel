<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterEventController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;

Route::redirect('/', '/eventos');

// Events
Route::resource('/eventos', EventoController::class)->middleware('auth');
Route::get('/events/{id}', [EventoController::class, 'show'])->middleware('auth');

// Team LDAW
Route::get('/students', function () {
    return view('students.index');
})
    ->name('students');


Route::get('/registerEvent', [RegisterEventController::class, 'create'])
    ->middleware('auth')
    ->name('registerEvent.index');

// Account
Route::resource('users', UserController::class)
    ->middleware('auth');


// Dashboard
Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/dashboard/mi-cuenta', [AdminController::class, 'account'])
    ->middleware('auth.admin')
    ->name('admin.index');

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
