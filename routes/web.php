<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
})->middleware([
//    \App\Http\Middleware\DisablePreventBack::class,
]);

Route::resources([
    'categorias' => CategoriaController::class,
    'productos' => ProductoController::class,
    'pacientes' => PacienteController::class,
]);

Route::middleware([
//    \App\Http\Middleware\DisablePreventBack::class,
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/citas', [CitaController::class, 'index'])->name('ver-citas');
    Route::get('/ver-citas', [CitaController::class, 'getAllCitas']);
});
