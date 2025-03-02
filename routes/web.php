<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/index', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuario/crear', [UsuariosController::class, 'registrar'])->name('usuarios.registrar');
Route::post('/usuario/store', [UsuariosController::class, 'guardar'])->name('guardar');
Route::get('/usuario/editar/{user}', [UsuariosController::class, 'editar'])->name('usuarios.edit');
Route::any('/usuario/guardar/ruta/{user}', [UsuariosController::class, 'actualizar'])->name('update');
Route::delete('/usuario/destroy/{user}', [UsuariosController::class, 'destroy'])->name('destroy');

Route::get('/peliculas', [PeliculasController::class, 'index'])->name('peliculas.index');
Route::get('/detalles', [PeliculasController::class, 'showFilm'])->name('peliculas.detalles');
Route::get('/detallesVehiculos', [PeliculasController::class, 'showVehiculo'])->name('peliculas.detallesVehiculos');
