<?php

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\TipoDeTarefaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TarefaController::class, 'index']);
Route::get('/tarefa/{id}', [TarefaController::class, 'show'])
    ->where('id', '[0-9]+');

Route::get('/tarefa/inserir', [TarefaController::class, 'create']);
Route::post('/tarefa/inserir', [TarefaController::class, 'store']);
Route::delete('/tarefa/excluir/{id}', [TarefaController::class, 'destroy']);
Route::get('/tarefa/{id}/atualizar', [TarefaController::class, 'edit']);
Route::post('/tarefa/{id}/atualizar', [TarefaController::class, 'update']);

Route::get('/tipo_de_tarefa', [TipoDeTarefaController::class, 'index']);
Route::get('/tipo_de_tarefa/inserir', [TipoDeTarefaController::class, 'create']);
Route::post('/tipo_de_tarefa/inserir', [TipoDeTarefaController::class, 'store']);
Route::get('/tipo_de_tarefa/{id}/atualizar', [TipoDeTarefaController::class, 'edit']);
Route::post('/tipo_de_tarefa/{id}/atualizar', [TipoDeTarefaController::class, 'update']);
Route::delete('/tipo_de_tarefa/{idTipoDeTarefa}', [TipoDeTarefaController::class, 'destroy']);
