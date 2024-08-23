<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
})->middleware([
//    \App\Http\Middleware\DisablePreventBack::class,
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
});
