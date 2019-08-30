<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DadoMedico extends Model
{

	public function jogador(){
      return $this->belongsTo('App\Jogador', 'jogador_id', 'id');
    }

    public function registrarDadoMedico($request){

    	$this->sexo = $request->sexo;
        $this->jogador_id = $request->jogador_id;
    	$this->altura = $request->altura;
    	$this->peso = $request->peso;
    	$this->peso_anterior = $request->peso_anterior;
    	$this->disponivel = $request->disponivel;
    	$this->restricao = $request->restricao;
    	$this->historico_medico = $request->historico_medico;

    	if(!Storage::exists('anexo_dados_medicos/')) {
			Storage::makeDirectory('anexo_dados_medicos/', 0775, true);
        }
        $path = $request->file('anexo')->store('anexo_dados_medicos');
        $this->anexo = $path;
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
        if ($request->historico_medico){
            $this->historico_medico = $request->historico_medico;
        }
        if ($request->anexo){
        	
            if(!Storage::exists('anexo_dados_medicos/')) {
			Storage::makeDirectory('anexo_dados_medicos/', 0775, true);
        }
	        $path = $request->file('anexo')->store('anexo_dados_medicos');
	        $this->anexo = $path;
        }

        $this->save();
    }
    
}
