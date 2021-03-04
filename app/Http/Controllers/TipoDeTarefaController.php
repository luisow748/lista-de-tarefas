<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\TipoDeTarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class TipoDeTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoDeTarefas = TipoDeTarefa::all();
        return Inertia::render('TipoDeTarefas/TiposDeTarefas', [
            'tipoDeTarefas' => $tipoDeTarefas,
            'inserirNovoTipo' => false
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('NovoTipoDeTarefa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
            $tipoDeTarefa = new TipoDeTarefa();
            $tipoDeTarefa->nome = $request->nome;
            $tipoDeTarefa->save();
        DB::commit();
        // dd($request);
        $tipoDeTarefas = TipoDeTarefa::all();
        return Inertia::render('TipoDeTarefas/TiposDeTarefas', [
            'tipoDeTarefas' => $tipoDeTarefas,
            'mensagem' => "Tipo inserido com sucesso!",
            'inserirNovoTipo' => false
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDeTarefa  $tipoDeTarefa
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDeTarefa $tipoDeTarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoDeTarefa  $tipoDeTarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDeTarefa $tipoDeTarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoDeTarefa  $tipoDeTarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDeTarefa $tipoDeTarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDeTarefa  $tipoDeTarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDeTarefa $tipoDeTarefa)
    {
        //
    }
}
