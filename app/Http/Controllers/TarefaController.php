<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\TipoDeTarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Services\CriarTarefaService;
use App\Services\AtualizarTarefaService;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        $tipoDeTarefas = TipoDeTarefa::orderBy('nome')->get();
        return Inertia::render('Tarefa/ListaTarefas', [
            'tarefas' => $tarefas,
            'tipoDeTarefas' => $tipoDeTarefas
        ]);
    }

    public function create()
    {
        $tipoDeTarefas = TipoDeTarefa::orderBy('nome')->get();
        return Inertia::render('Tarefa/NovaTarefa', [
            'tipoDeTarefas' => $tipoDeTarefas
        ]);
    }

    public function store(Request $request)
    {
        $novaTarefa = new CriarTarefaService($request);
        if(!$novaTarefa)
        {
            $tarefas = Tarefa::all();
            return Inertia::render('Tarefa/ListaTarefas', [
                'tarefas' => $tarefas,
                'mensagem' => 'A Tarefa não foi gravada'
            ]);
        }

        return redirect('/')->with('mensagem','tarefa incluída com sucesso');

    }

    public function show($tipoDeTarefasId)
    {
        $tarefas = Tarefa::where('tipo_de_tarefas_id', $tipoDeTarefasId)
            ->orderBy('descricao')->get();
            $tipoDeTarefas = TipoDeTarefa::orderBy('nome')->get();
        return Inertia::render('Tarefa/ListaTarefas', [
            'tarefas' => $tarefas,
            'tipoDeTarefas' => $tipoDeTarefas
        ]);
    }

    public function edit($id)
    {
        $tarefaAtualizar = Tarefa::find($id);
        $tipoDeTarefas = TipoDeTarefa::orderBy('nome')->get();
        return Inertia::render('Tarefa/NovaTarefa', [
            'tipoDeTarefas' => $tipoDeTarefas,
            'tarefa' => $tarefaAtualizar,
            'modo' => 'editar'
        ]);
    }

    public function update(Request $request, $id)
    {
        $tarefaAtualizar = new AtualizarTarefaService($request, $id);
        if(!$tarefaAtualizar)
        {
            $tarefas = Tarefa::all();
            return Inertia::render('Tarefa/ListaTarefas', [
                'tarefas' => $tarefas,
                'mensagem' => 'A Tarefa não foi atualizada'
            ]);
        }

        return redirect('/');

    }

    public function destroy($id)
    {
        Tarefa::destroy($id);
        return redirect('/');

    }
}
