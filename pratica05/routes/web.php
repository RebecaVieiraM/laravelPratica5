<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DicionariosController;

Route::get('/dicionarios', [DicionariosController::class, 'index']);
Route::get('/dicionarios/create', [DicionariosController::class, 'create']);
Route::post('/dicionarios/store', [DicionariosController::class, 'store']);
Route::delete('/dicionarios/delete', [DicionariosController::class, 'delete']);
