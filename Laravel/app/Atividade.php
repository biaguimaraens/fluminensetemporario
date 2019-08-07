<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Atividade extends Model
{
    public function cadastrarAtividade($request){

    	$this->nome = $request->nome;
    	$this->descricao = $request->descricao;
    	$this->duracao = $request->duracao;
    	$this->tipo = $request->tipo;

    	if(!Storage::exists('atividades/')) {
			Storage::makeDirectory('atividades/', 0775, true);
        }

		$image = base64_decode(substr($request->imagem, strpos($request->imagem, ",")+1));
		$imgName = uniqid() . '.jpeg';
		$path = storage_path('/app/atividades/' . $imgName);
		file_put_contents($path,$image);

		$this->imagem = $imgName;
		$this->save();
    }
}
