<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('data_limite');
            $table->string('tipo_de_tarefas');
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('tipo_de_tarefas_id');
            $table->foreign('tipo_de_tarefas_id')
                ->references('id')
                ->on('tipo_de_tarefas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
