<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CardJogadorResource extends JsonResource
{

     /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;

    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'apelido' => $this->apelido,
            'nacionalidade' => $this->nacionalidade,
            'pe_dominante' => $this->pe_dominante,
            'foto' => $this->foto,
            'clube' => $this->clube, 
            'categoria' => $this->categoria,
            'posicao_principal' => $this->posicao_principal,
            'grupo_atual' => $this->grupo_atual,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
