<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DadoMedicoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'jogador'=>($this->jogador)->apelido,
            'sexo' => $this->sexo,
            'altura'=> $this->altura,
            'peso'=>$this->peso,
            'peso_anterior'=>$this->peso_anterior,
            'disponivel'=>$this->disponivel,
            'restricao'=>$this->restricao,
            'historico_medico'=>$this->historico_medico,
        ];
    }
}
