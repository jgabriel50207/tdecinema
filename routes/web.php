<?php

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SessoesController;

Route::resource('filmes', FilmeController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('sessoes', SessoesController::class);


Route::get('/', function () {
    return redirect()->route('filmes.index');
});



