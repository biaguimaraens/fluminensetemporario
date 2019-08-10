<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jogador extends Model
{
    use SoftDeletes;

    protected $fillable = [];

    public function registraJogador($data){

        if($data->cbf_id != NULL){
            $this->cbf_id = $data->cbf_id;
        }
        
        if($data->apelido != NULL){
            $this->apelido = $data->apelido;
        }

        if($data->nome_completo != NULL){
            $this->nome_completo = $data->nome_completo;    
        }

        if($data->nacionalidade != NULL){
            $this->nacionalidade = $data->nacionalidade;    
        }

        if($data->pe_dominante != NULL){
            $this->pe_dominante = $data->pe_dominante;    
        }
        
        if($data->foto != NULL){

            if(!Storage::exists('jogadores/')) {
                Storage::makeDirectory('jogadores/', 0775, true);
            }

            $image = base64_decode(substr($data->foto, strpos($data->foto, ",")+1));
		    $imgName = uniqid() . '.jpeg';
		    $path = storage_path('/app/jogadores/' . $imgName);
		    file_put_contents($path,$image);

		    $this->foto = $imgName;
        }
        
        if($data->grupo_atual != NULL){
            $this->grupo_atual = $data->grupo_atual;
        }
        
        if($data->categoria != NULL){
            $this->categoria = $data->categoria;
        }

        if($data->posicao_principal != NULL){
            $this->posicao_principal = $data->posicao_principal;
        }
        
        if($data->posicao_secundaria != NULL){
            $this->posicao_secundaria = $data->posicao_secundaria;
        }
        
        if($data->clube != NULL){
            $this->clube = $data->clube;
        }
        
        if($data->inicio_clube != NULL){
            $this->inicio_clube = $data->inicio_clube;
        }

        if($data->fim_emprestimo != NULL){
            $this->fim_emprestimo = $data->fim_emprestimo;
        }

        if($data->caracteristicas != NULL){
            $this->caracteristicas = $data->caracteristicas;
        }

        //verificar como salvar pdf no bd
        if($data->posicao_secundaria != NULL){
            $this->anexo = $data->anexo;
        }     
        
        $this->save();
        return "Jogador registrado com sucesso!";

    }
}
