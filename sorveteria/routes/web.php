<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::view('/', 'inicio');

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/criar', [ClienteController::class, 'create']);
Route::post('/clientes/salvar', [ClienteController::class, 'store']);
Route::get('/clientes/editar/{id}', [ClienteController::class, 'edit']);
Route::put('/clientes/atualizar/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/deletar/{id}', [ClienteController::class, 'destroy']);


