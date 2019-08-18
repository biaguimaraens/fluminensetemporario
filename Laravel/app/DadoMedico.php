<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadoMedico extends Model
{
    public function registrarDadoMedico($request){

    	$this->sexo = $request->sexo;
    	$this->altura = $request->altura;
    	$this->peso = $request->peso;
    	$this->peso_anterior = $request->peso_anterior;
    	$this->disponivel = $request->disponivel;
    	$this->restricao = $request->restricao;
    	$this->save();
    }

    public function atualizarDadoMedico($request){

    	if ($request->sexo){
            $this->sexo = $request->sexo;
        }
        if ($request->altura){
            $this->altura = $request->altura;
        }
        if ($request->peso){
            $this->peso = $request->peso;
        }
        if ($request->peso_anterior){
            $this->peso_anterior = $request->peso_anterior;
        }
        if ($request->disponivel){
            $this->disponivel = $request->disponivel;
        }
        if ($request->restricao){
            $this->restricao = $request->restricao;
        }
        $this->save();
    }
}
