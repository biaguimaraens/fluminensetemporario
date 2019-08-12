<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadoMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dado_medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sexo');
            $table->float('altura');
            $table->float('peso');
            $table->float('peso_anterior');
            $table->string('disponivel');
            $table->string('restricao');
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
        Schema::dropIfExists('dado_medicos');
    }
}
