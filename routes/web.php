<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Generics\BanksController;

Route::get('/', function () {
    return view('welcome');
});


// Rutas Genericas tablas maestras
Route::resource('banks', BanksController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
   // 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

