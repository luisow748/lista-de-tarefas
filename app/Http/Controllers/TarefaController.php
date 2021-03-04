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
        return Inertia::render('Tarefa/ListaTarefas', [
            'tarefas' => $tarefas
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

        $tarefas = Tarefa::all();
        return Inertia::render('Tarefa/ListaTarefas', [
            'tarefas' => $tarefas,
            'mensagem' => 'Tarefa incluída com sucesso'
        ]);
    }

    public function show(Tarefa $tarefa)
    {
        //
    }

    public function edit(Tarefa $tarefa)
    {
        //
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
