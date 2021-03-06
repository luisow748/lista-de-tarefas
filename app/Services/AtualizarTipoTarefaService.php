<?php
namespace App\Services;

use App\Models\TipoDeTarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtualizarTipoTarefaService {
    public function __construct(Request $request, $id)
    {
        DB::beginTransaction();
            $tipoAtualizar = TipoDeTarefa::find($id);
            $tipoAtualizar->nome = $request->nome;
            $tipoAtualizar->save();
        DB::commit();
        return true;

    }
}
