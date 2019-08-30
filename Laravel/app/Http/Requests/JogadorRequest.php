<?php

namespace App\Http\Requests;

use App\Jogador;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class JogadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
      throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $cbf_id = array('required','regex:/^[0-9]{7}/');

        if ($this->isMethod('post')){
            return [
                'cbf_id' => $cbf_id,
                'apelido' => 'required|string',
                'nome_completo' => 'required|string',
                'nacionalidade' => 'required|string',
                'pe_dominante' => 'required|string',
                'foto' => 'string', //verificar como ver o  tipo de imagem.
                'grupo_atual' => 'string',
                'categoria' => 'string',
                'posicao_principal' => 'required|string',
                'posicao_secundaria' => 'string',
                'clube' => 'string',
                'inicio_clube' => 'string',
                'emprestado_clube'=> 'string',
                'fim_emprestimo'=> 'string',
                'caracteristicas'=> 'string',
                'anexo' => 'string',
            ];
        }

        if ($this->isMethod('put')){
            return [
                'cbf_id' => 'regex:/^[0-9]{7}/',
                'apelido' => 'string',
                'nome_completo' => 'string',
                'nacionalidade' => 'string',
                'pe_dominante' => 'string',
                'foto' => 'string',
                'grupo_atual' => 'string',
                'categoria' => 'string',
                'posicao_principal' => 'string',
                'posicao_secundaria' => 'string',
                'clube' => 'string',
                'inicio_clube' => 'string',
                'emprestado_clube'=> 'string',
                'fim_emprestimo'=> 'string',
                'caracteristicas'=> 'string',
                'anexo' => 'string',
            ];
        }
    }

    public function messages()
    {
      return [
        'cbf_id.required' => 'Por favor preencha o campo CBF ID.',
        'cbf_id.regex' => 'Por favor digite 7 numeros.',
        'apelido.required' =>'Por favor preencha o campo Apelido.',
        'nome_completo.required' => 'Por favor preencha o campo Nome Completo.',
        'nacionalidade.required' => 'Por favor preencha o campo Nacionalidade.',
        'pe_dominante.required' => 'Por favor preencha o campo Pé Dominante.',
        'posicao_principal.required' => 'Por favor preencha o campo Posição Principal.',
        
      ];
    }
}
