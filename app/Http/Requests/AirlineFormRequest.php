<?php

namespace App\Http\Requests;

use App\Rules\UniqueAirline;
use Illuminate\Foundation\Http\FormRequest;

class AirlineFormRequest extends FormRequest
{
    // FormRequest responsável por validar as requisições referentes à Companhias Aéreas
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    // Método responsável por avaliar se a requisição é permitida
    // Como não existem perfis ou uma camada de autenticação todos
    // os métodos authorize() retornam true
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    // Método responsável por definir quais regras serão utilizadas para avliar cada campo
    // As regras podem ser definidas em uma string usando '|' como caracter delimitador ou
    // como um array contendo as regras individuais. A segunda abordagem é usada para regras customizadas
    public function rules()
    {
        return [
            'CD_CMPN_AEREA' => ['required', new UniqueAirline, 'max:2'],
            'NM_CMPN_AEREA' => 'required|max:22',
            'CD_PAIS' => 'nullable|exists:itr_pais,CD_PAIS'
        ];
    }

    // Método responsável por definir quais são as mensagens de erro para cada regra e/ou campo
    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_CPMN_AEREA.unique' => 'O código da c. aérea já está em uso',
            'CD_CPMN_AEREA.max' => 'O código da c. aérea deve ter até 2 caracteres',
            'NM_CMPN_AEREA.max' => 'O noma da c. aérea deve ter até 22 caracteres',
            'CD_PAIS.exists' => 'Selecione um país válido'
        ];
    }
}
