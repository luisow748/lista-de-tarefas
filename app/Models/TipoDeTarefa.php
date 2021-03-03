<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarefa;

class TipoDeTarefa extends Model
{
    use HasFactory;
    protected $fillable = ["nome"];
    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
