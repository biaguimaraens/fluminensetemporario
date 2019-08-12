<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class AtividadeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //$path = storage_path('app/atividades/' . $this->imagem);
        $picture = base64_encode(Storage::get('atividades/' . $this->imagem));

        return [
            'nome' => $this->nome,
            'descricao'=> $this->descricao,
            'duracao'=>$this->duracao,
            'tipo'=>$this->tipo,
            'imagem'=> 'data:image/png;base64,' . $picture,
        ];
    }
}
