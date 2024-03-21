<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentificationController;

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

Route::get('/pelis',[MoviesController::class, 'mostrarPelis']);
Route::get('/mostrar-sesion',[SessionController::class, 'mostrarSesion']);
Route::get('/mostrar-sesion/{id}', [SessionController::class, 'mostrarSesionId']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
