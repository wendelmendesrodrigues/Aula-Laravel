<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']); //pegar dados
Route::post('/users', [UserController::class, 'store']); //enviar dados

Route::put('/users{id}', [UserController::class, 'update']); //atualizar dados
Route::delete('/users{id}', [UserController::class, 'delete']); //deletar dados

