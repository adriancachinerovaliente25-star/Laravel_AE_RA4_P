<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoControllerACV;
use App\Http\Controllers\EstadisticasControllerACV;

Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas con el prefijo /videojuegos
Route::prefix('videojuegos')->group(function () {
    Route::get('/', [VideojuegoControllerACV::class, 'index']);
    Route::get('/plataformas', [VideojuegoControllerACV::class, 'plataformas']);
    Route::get('/{id}', [VideojuegoControllerACV::class, 'show']);
});

Route::get('/estadisticas', EstadisticasControllerACV::class)->middleware('auth');

Route::get('/login', function () {
    return 'Debes iniciar sesión para acceder a esta página.';
})->name('login');
