<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', [PeliculasController::class, 'index'])->name('peliculas.index');
Route::get('/detalles', [PeliculasController::class, 'showFilm'])->name('peliculas.detalles');
Route::get('/detallesVehiculos', [PeliculasController::class, 'showVehiculo'])->name('peliculas.detallesVehiculos');
