<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HistorialMedicoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OdontogramaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
})->middleware([
//    \App\Http\Middleware\DisablePreventBack::class,
]);

Route::get('clean-cache', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
});

Route::resources([
    'categorias' => CategoriaController::class,
    'citas' => CitaController::class,
    'productos' => ProductoController::class,
    'pacientes' => PacienteController::class,
    'historial-medico' => HistorialMedicoController::class,
]);

Route::middleware([
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

Route::get('/pacientes/{paciente:dni}/odontograma', [PacienteController::class, 'odontograma']);
Route::get('/historia-clinica/{paciente:dni}/ver-historial-clinico', [HistorialMedicoController::class, 'index']);

Route::get('/odontograma', [OdontogramaController::class, 'canvas']);
Route::get('/odontogramas/{id}/{tooth}', [OdontogramaController::class, 'display']);
Route::post('/odontograma', [OdontogramaController::class, 'data']);
Route::put('/odontograma', [OdontogramaController::class, 'update']);
