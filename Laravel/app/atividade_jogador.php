<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atividade_jogador extends Model
{
    public function jogador(){
      return $this->belongsTo('App\Jogador', 'jogador_id', 'id');
    }

    public function atividade(){
      return $this->belongsTo('App\Atividade', 'atividade_id', 'id');
    }
    public function RegistrarAtividade($request){
    	$atividade = Atividade::find($request->atividade_id);
    	$atividade->jogador()->attach($request->array_jogador);
    }
}
