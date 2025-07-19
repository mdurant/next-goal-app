<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Generics\BanksController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas Genericas tablas maestras
Route::resource('banks', BanksController::class);
