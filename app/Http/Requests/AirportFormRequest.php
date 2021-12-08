<?php

namespace App\Http\Requests;

use App\Rules\UniqueAirport;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AirportFormRequest extends FormRequest
{
    /*
     * Explicação geral dos FormRequests e métodos em AirlineController.php
     **/

    // FormRequest responsável por validar as requisições referentes à Aeroportos

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'CD_ARPT' => ['required', new UniqueAirport, 'max:3'],
            'CD_PAIS' => 'required|exists:itr_pais,CD_PAIS',
            'SG_UF' => 'nullable|exists:itr_uf,SG_UF',
            'NM_CIDD' => 'required|max:30'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_ARPT.unique' => 'O código do aeroporto já está em uso',
            'CD_ARPT.max' => 'O código do aeroporto deve ter até 3 caracteres',
            'CD_PAIS.exists' => 'Selecione um país válido',
            'SG_UF.exists' => 'Selecione uma UF válida',
            'NM_CIDD.max' => 'O nome da cidade deve ter até 30 caracteres'
        ];
    }
}
