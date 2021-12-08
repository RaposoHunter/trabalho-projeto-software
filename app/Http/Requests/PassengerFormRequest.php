<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassengerFormRequest extends FormRequest
{
    /*
     * Explicação geral dos FormRequests e métodos em AirlineFormRequest.php
     **/

    // FormRequest responsável por validar as requisições referentes à Passageiros

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
            'NM_PSGR' => 'required|string|max:30',
            'IC_SEXO_PSGR' => 'nullable|string|max:1',
            'DT_NASC_PSGR' => 'nullable|date_format:d/m/Y',
            'CD_PAIS' => 'nullable|exists:itr_pais,CD_PAIS',
            'IC_ESTD_CIVIL' => 'required|in:C,S',
            'CD_PSGR_RESP' => 'nullable|exists:itr_psgr,CD_PSGR'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'string' => 'O campo precisa ser um texto válido',
            'NM_PSGR.max' => 'O nome do passageiro deve ter até 30 letras',
            'DT_NASC_PSGR.date_format' => 'A data de nascimento deve seguir o formato DD/MM/YYYY',
            'CD_PAIS.exists' => 'Selecione um país válido',
            'CD_PSGR_RESP.exists' => 'Selecione um responsável válido',
        ];
    }
}
