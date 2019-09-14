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

        $cbf_id = array('required','regex:/^[0-9]{7}/','max:7');
        $update_cbf_id = array('regex:/^[0-9]{7}/','max:7');

        if ($this->isMethod('post')){
            return [
                'cbf_id' => $cbf_id,
                'apelido' => 'required|string',
                'nome_completo' => 'required|string',
                'nacionalidade' => 'required|string',
                'pe_dominante' => 'required|string',
                'foto' => 'string',//'mimes:jpeg,jpg,png,gif', 
                'grupo_atual' => 'string',
                'categoria' => 'string',
                'posicao_principal' => 'required|string',
                'posicao_secundaria' => 'string',
                'clube' => 'string',
                'inicio_clube' => 'string',
                'emprestado_clube'=> 'string',
                'fim_emprestimo'=> 'string',
                'caracteristicas'=> 'string',
                'anexo' => 'mimes:pdf',
            ];
        }

        if ($this->isMethod('put')){
            return [
                'cbf_id' => $update_cbf_id,
                'apelido' => 'string',
                'nome_completo' => 'string',
                'nacionalidade' => 'string',
                'pe_dominante' => 'string',
                'foto' => 'mimes:jpeg,jpg,png,gif',
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
        'cbf_id.max' => 'Você digitou mais que 7 números, verifique sua entrada.',
        'cbf_id.regex' => 'Por favor digite 7 números.',
        'apelido.required' =>'Por favor preencha o campo Apelido.',
        'nome_completo.required' => 'Por favor preencha o campo Nome Completo.',
        'nacionalidade.required' => 'Por favor preencha o campo Nacionalidade.',
        'pe_dominante.required' => 'Por favor preencha o campo Pé Dominante.',
        'posicao_principal.required' => 'Por favor preencha o campo Posição Principal.',
        'anexo.mimes' => 'O anexo deve ser um arquivo pdf.',
        'foto.mimes' => 'A foto deve ser um arquivo jpeg, jpg, png ou gif. Verifique sua entrada.',
        
      ];
    }
}
