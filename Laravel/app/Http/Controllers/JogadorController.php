<?php

namespace App\Http\Controllers;

use App\Jogador;
use Illuminate\Http\Request;


class JogadorController extends Controller
{
    

    public function cardsJogadores(){
        $jogadores = Jogador::all();

        return response()->success($jogadores);
    }

    public function createJogador(Request $request){
        
        $jogador = new Jogador;
        
        $resposta = $jogador->registraJogador($request);
        return response()->success([$resposta, $jogador]);
   

    }

    public function showJogador($id){
        
        $jogador = Jogador::findOrFail($id);

        return response()->success($jogador);
    }

    public function updateJogador(Request $request, $id){
       
        $jogador = Jogador::findOrFail($id);
        
        $resposta = $jogador->registraJogador($request);
        return response()->success([$resposta, $jogador]);
    }

    public function destroyJogador($id){
        
        $jogador = Jogador::findOrFail($id);
        
        $jogador->delete();
        return response()->success("Jogador deletado com sucesso.");
    }
}
