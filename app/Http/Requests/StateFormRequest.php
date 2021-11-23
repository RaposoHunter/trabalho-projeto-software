<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateFormRequest extends FormRequest
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
            'SG_UF' => 'required|unique:itr_uf,SG_UF|max:2|min:2',
            'NM_UF' => 'required|max:25',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'SG_UF.unique' => 'A sigla da UF já está em uso',
            'SG_UF.min' => 'A sigla da UF deve ter 2 caracteres',
            'SG_UF.max' => 'A sigla da UF deve ter 2 caracteres',
            'NM_UF.max' => 'o nome da UF deve ter até 25 caracteres',
        ];
    }
}
