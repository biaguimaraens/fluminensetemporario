<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeJogadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividade_jogadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jogador_id');
            $table->unsignedBigInteger('atividade_id');
            $table->string('grupo');
            $table->string('anexo');
            $table->string('data');
            $table->timestamps();
        });
        Schema::table('atividade_jogadors', function (Blueprint $table){
            $table->foreign('jogador_id')->references('id')->on('jogadors')->onDelete('cascade');
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividade_jogadors');
    }
}
