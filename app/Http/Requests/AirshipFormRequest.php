<?php

namespace App\Http\Requests;

use App\Rules\UniqueAirship;
use Illuminate\Foundation\Http\FormRequest;

class AirshipFormRequest extends FormRequest
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
            'CD_ARNV' => ['required', new UniqueAirship, 'max:5'],
            'CD_EQPT' => 'required|exists:itr_eqpt,CD_EQPT',
            'CD_CMPN_AEREA' => 'required|exists:itr_cmpn_aerea,CD_CMPN_AEREA'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_ARNV.unique' => 'O código da aeronave já está em uso',
            'CD_ARNV.max' => 'O código da aeronave deve ter até 5 caracteres',
            'CD_EQPT.exists' => 'Selecione um equipamento válido',
            'CD_CMPN_AEREA.exists' => 'Selecione uma c. aérea válida',
        ];
    }
}
