<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineFormRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'CD_CMPN_AEREA' => 'required|unique:itr_cmpn_aerea,CD_CMPN_AEREA|max:2',
            'NM_CMPN_AEREA' => 'required|max:22',
            'CD_PAIS' => 'nullable|exists:itr_pais,CD_PAIS'
        ];
    }

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
