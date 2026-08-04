<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;

Route::get('/', [SitioController::class, 'index']);
Route::get('/sitios', [SitioController::class, 'index']);
Route::get('/sitios/{id}', [SitioController::class, 'show']);

Route::get('/contacto', [SitioController::class, 'contacto']);
Route::post('/contacto', [SitioController::class, 'procesarContacto']);