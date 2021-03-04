<?php

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\TipoDeTarefaController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [TarefaController::class, 'index']);
Route::get('/tarefa/inserir', [TarefaController::class, 'create']);
Route::post('/tarefa/inserir', [TarefaController::class, 'store']);

Route::get('/tipo_de_tarefa', [TipoDeTarefaController::class, 'index']);
Route::get('/tipo_de_tarefa/inserir', [TipoDeTarefaController::class, 'create']);
Route::post('/tipo_de_tarefa/inserir', [TipoDeTarefaController::class, 'store']);
Route::delete('/tipo_de_tarefa/{idTipoDeTarefa}', [TipoDeTarefaController::class, 'destroy']);
