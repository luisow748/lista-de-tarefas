<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;
use App\Models\TipoDeTarefa;

class CriarTarefaService
{
    public function __construct(Request $request)
    {
        DB::beginTransaction();
        $novaTarefa = new Tarefa();
        $novaTarefa->descricao = $request->descricao;
        $novaTarefa->data_limite = $request->data_limite;
        $novaTarefa->tipo_de_tarefas_id = $request->tipo_de_tarefas_id;
            $tipo = TipoDeTarefa::find($request->tipo_de_tarefas_id);
        $novaTarefa->tipo_de_tarefas = $tipo->nome;
        $novaTarefa->save();
    DB::commit();
    return true;
    }
}
