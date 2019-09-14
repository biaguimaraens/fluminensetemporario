<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;


class DepartamentoController extends Controller
{
    public function listDepartamentos(){
        
        $departamentos = Departamento::all();

        return response()->success($departamentos);
    }

    public function createDepartamento(Request $request){
        
        $departamento = new Departamento;
        
        $resposta = $departamento->registraDepartamento($request);
        return response()->success([$resposta, $departamento]);
    }

    public function showDepartamento($id){
        
        $departamento = Departamento::findOrFail($id);

        return response()->success($departamento);
    }

    public function updateDepartamento(Request $request, $id){
       
        $departamento = Departamento::findOrFail($id);
        
        $resposta = $departamento->registraDepartamento($request);
        return response()->success([$resposta, $departamento]);
    }

    public function destroyDepartamento($id){
        
        $departamento = Departamento::findOrFail($id);
        
        $nome = $departamento->nome;
        $departamento->delete();
        
        return response()->success("Departamento $nome deletado com sucesso.");
    }
}
