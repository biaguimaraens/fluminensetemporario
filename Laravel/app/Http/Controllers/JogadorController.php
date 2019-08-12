<?php

namespace App\Http\Controllers;

use App\Jogador;
use Illuminate\Http\Request;
use App\Http\Resources\JogadorResource;
use App\Http\Resources\CardJogadorResource as CardsResource;


class JogadorController extends Controller
{
    

    public function cardsJogadores(){
        $jogadores = Jogador::all();

        $cards = CardsResource::collection($jogadores->keyBy->id);
        return response()->success($cards);
    }

    public function cardsJogadoresFluminense(){
        $jogadores = Jogador::where('clube', 'fluminense')->get();

        $cards = CardsResource::collection($jogadores->keyBy->id);
        return response()->success($cards);
    }

    public function createJogador(Request $request){
        
        $jogador = new Jogador;
        
        $resposta = $jogador->registraJogador($request);
        return response()->success([$resposta, $jogador]);
   

    }

    public function showJogador($id){
        
        $jogador = Jogador::findOrFail($id);

        $jogador_resource = new JogadorResource($jogador);
        return response()->success($jogador_resource);
        
    }

    public function updateJogador(Request $request, $id){
       
        $jogador = Jogador::findOrFail($id);
        
        $resposta = $jogador->registraJogador($request);
        $jogador_resource = new JogadorResource($jogador);
        return response()->success([$resposta, $jogador_resource]);
    }

    public function destroyJogador($id){
        
        $jogador = Jogador::findOrFail($id);
        
        $nome = $jogador->apelido;
        $jogador->delete();
        
        return response()->success("Jogador $nome deletado com sucesso.");
    }
}
