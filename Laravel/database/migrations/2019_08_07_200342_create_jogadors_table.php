<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogadors', function (Blueprint $table) {
            
            // infos gerais a todos dptos

            $table->bigIncrements('id');
            $table->string('cbf_id');
            $table->string('apelido');
            $table->string('nome_completo');
            $table->string('nacionalidade');
            $table->string('pe_dominante');
            $table->string('foto')->nullable();
            $table->string('grupo_atual')->nullable();
            $table->string('categoria')->nullable();
            $table->string('posicao_principal');
            $table->string('posicao_secundaria')->nullable();
            $table->string('clube')->nullable();
            $table->string('inicio_clube')->nullable();
            $table->string('emprestado_clube')->nullable();
            $table->string('fim_emprestimo')->nullable();
            $table->string('caracteristicas')->nullable();
            $table->string('anexo')->nullable();

            //somente pessoas autorizadas, infos sensíveis
            $table->string('fim_contrato')->nullable();
            $table->string('salario')->nullable();
            $table->string('valor_mercado')->nullable();
            $table->string('agente')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogadors');
    }
}
