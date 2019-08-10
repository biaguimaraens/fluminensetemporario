<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function registraDepartamento($request){
        
        if($request->nome != NULL){
            $this->nome = $request->nome;
        }     
        
        $this->save();
        return "Departamento registrado com sucesso!";
    }
}
