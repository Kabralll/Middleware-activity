<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Middleware\CheckBusinessHours; // <- importante importar

Route::get('/', function () {
    return view('welcome');
});

Route::get('/outside-hours', function () {
    return view('outside-hours'); 
})->name('outside-hours');

Route::get('/painel-financeiro', [PainelController::class, 'index'])
    ->middleware(CheckBusinessHours::class); // <- aqui usamos a classe diretamente