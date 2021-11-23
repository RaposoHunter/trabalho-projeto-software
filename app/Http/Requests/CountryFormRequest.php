<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryFormRequest extends FormRequest
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
            'CD_PAIS' => 'required|unique:itr_pais,CD_PAIS|max:2',
            'NM_PAIS' => 'required|max:25',
            'QT_PPLC_PAIS' => 'nullable|integer|min:0'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_PAIS.unique' => 'O código do país já está em uso',
            'CD_PAIS.max' => 'O código do país deve ter até 2 caracteres',
            'NM_PAIS.max' => 'O nome do país deve ter até 25 caracteres',
            'QT_PPLC_PAIS.integer' => 'A população do país deve ser um número inteiro positivo',
            'QT_PPLC_PAIS.min' => 'A população do país deve ser um número inteiro positivo',
        ];
    }
}
