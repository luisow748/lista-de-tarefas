<?php
<<<<<<< HEAD

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;
use App\Models\TipoDeTarefa;
=======
namespace App\Services;

use App\Models\Tarefa;
use App\Models\TipoDeTarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
>>>>>>> c847d68d2a62b6e7d4596a7662c4769fed30e2f4

class AtualizarTarefaService
{
    public function __construct(Request $request, $id)
    {
        DB::beginTransaction();
<<<<<<< HEAD
        $tarefaAtualizar = Tarefa::find($id);
        $tarefaAtualizar->descricao = $request->descricao;
        $tarefaAtualizar->data_limite = $request->data_limite;
        $tarefaAtualizar->status = $request->status;
        $tarefaAtualizar->tipo_de_tarefas_id = $request->tipo_de_tarefas_id;
            $tipo = TipoDeTarefa::find($request->tipo_de_tarefas_id);
        $tarefaAtualizar->tipo_de_tarefas = $tipo->nome;
        $tarefaAtualizar->save();
    DB::commit();
    return true;
=======
            $tarefaAtualizar = Tarefa::find($id);
            $tarefaAtualizar->descricao = $request->descricao;
            $tarefaAtualizar->data_limite = $request->data_limite;
            $tarefaAtualizar->status = $request->status;
            $tarefaAtualizar->tipo_de_tarefas_id = $request->tipo_de_tarefas_id;
                $tipo = TipoDeTarefa::find($tarefaAtualizar->tipo_de_tarefas_id);
            $tarefaAtualizar->tipo_de_tarefas = $tipo->nome;
            $tarefaAtualizar->save();
        DB::commit();
        return true;
>>>>>>> c847d68d2a62b6e7d4596a7662c4769fed30e2f4
    }
}
