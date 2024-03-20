<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\MonedaController;

Route::apiResource('juegos', JuegoController::class);
Route::apiResource('monedas', MonedaController::class);