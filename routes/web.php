<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;

Route::get('/', function () {
    return redirect('/libros');
});

// Rutas para libros
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store');
Route::delete('/libros/{id}', [LibroController::class, 'destroy'])->name('libros.destroy');

// Rutas para prestamos
Route::get('/prestamos', [PrestamoController::class, 'index'])->name('prestamos.index');
Route::post('/prestamos', [PrestamoController::class, 'store'])->name('prestamos.store');
