<?php

use App\Http\Controllers\RolController;
use App\Http\Controllers\EstadoController;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/jugador', [JugadorController::class, 'index']);
Route::resource('roles', RolController::class)->except(['create', 'edit']);
Route::resource('estados', EstadoController::class)->except(['create', 'edit']);
