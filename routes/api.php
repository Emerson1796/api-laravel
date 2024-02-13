<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;

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

Route::resource('usuarios', UsuarioController::class);
Route::resource('enderecos', EnderecoController::class);
Route::resource('cidades', CidadeController::class);
Route::resource('estados', EstadoController::class);
