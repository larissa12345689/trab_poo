<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/criar', [ClienteController::class, 'create']);
Route::post('/clientes/salvar', [ClienteController::class, 'store']);
Route::post('/clientes/editar', [ClienteController::class, 'update']);
Route::delete('/clientes/deletar/{id}', [ClienteController::class, 'destroy']);


