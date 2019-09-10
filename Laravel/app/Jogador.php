<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jogador extends Model
{
    use SoftDeletes;

    protected $fillable = [];

    public function registraJogador($request){

        if($request->cbf_id != NULL){
            $this->cbf_id = $request->cbf_id;
        }
        
        if($request->apelido != NULL){
            $this->apelido = $request->apelido;
        }

        if($request->nome_completo != NULL){
            $this->nome_completo = $request->nome_completo;    
        }

        if($request->nacionalidade != NULL){
            $this->nacionalidade = $request->nacionalidade;    
        }

        if($request->pe_dominante != NULL){
            $this->pe_dominante = $request->pe_dominante;    
        }
        
        if($request->foto != NULL){

            $imgName = $this->imgPath($request->foto);
		    $this->foto = $imgName;
        }
        
        if($request->grupo_atual != NULL){
            $this->grupo_atual = $request->grupo_atual;
        }
        
        if($request->categoria != NULL){
            $this->categoria = $request->categoria;
        }

        if($request->posicao_principal != NULL){
            $this->posicao_principal = $request->posicao_principal;
        }
        
        if($request->posicao_secundaria != NULL){
            $this->posicao_secundaria = $request->posicao_secundaria;
        }
        
        if($request->clube != NULL){
            $this->clube = $request->clube;
        }
        
        if($request->inicio_clube != NULL){
            $this->inicio_clube = $request->inicio_clube;
        }

        if($request->emprestado_clube != NULL){
            $this->emprestado_clube = $request->emprestado_clube;
        }

        if($request->fim_emprestimo != NULL){
            $this->fim_emprestimo = $request->fim_emprestimo;
        }

        if($request->caracteristicas != NULL){
            $this->caracteristicas = $request->caracteristicas;
        }

        //verificar como salvar pdf no bd
        if($request->anexo != NULL){
            
            $anexo = $request->file('anexo');
            $path = $this->filePath($anexo);

            $this->anexo = $path;
        }     
        
        $this->save();
        return "Jogador registrado com sucesso!";
    }

    public function imgPath($img){
        
        if(!Storage::exists('jogadores/imgs')) {
            Storage::makeDirectory('jogadores/imgs', 0775, true);
        }

        $image = base64_decode(substr($img, strpos($img, ",")+1));
        
        $imgName = uniqid() . '.png';
        $path = storage_path('app/jogadores/imgs/' . $imgName);
        file_put_contents($path,$image);

        return $imgName;

    }

    public function filePath($file){
        
        if(!Storage::exists('jogadores/anexos')) {
            Storage::makeDirectory('jogadores/anexos', 0775, true);
        }
        
        $filename = 'anexo.'. $file->getClientOriginalExtension();
        $path = $file->storeAs('jogadores/anexos',$filename);

        return $path;
    }
}
