<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoDeTarefa;

class Tarefa extends Model
{
    use HasFactory;
    public function tipodetarefas()
    {
        return $this->belongsTo(TipoDeTarefa::class);
    }
}
