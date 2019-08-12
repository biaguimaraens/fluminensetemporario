<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JogadorResource extends JsonResource
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
            'id' => $this->id,
            'cbf_id' => $this->cbf_id,
            'apelido' => $this->apelido,
            'nome' => $this->nome_completo,
            'email' => $this->email,
            'nacionalidade' => $this->nacionalidade,
            'pe_dominante' => $this->pe_dominante,
            'foto' => $this->foto,
            'clube' => $this->clube, 
            'categoria' => $this->categoria,
            'posicao_principal' => $this->posicao_principal,
            'posicao_secundaria' => $this->posicao_secundaria,
            'grupo_atual' => $this->grupo_atual,
            'inicio_clube' => $this->inicio_clube,
            'emprestado_clube' => $this->emprestado_clube,
            'fim_emprestimo' => $this->fim_emprestimo, 
            'caracteristicas' => $this->caracteristicas,
            'anexo' => $this->anexo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
