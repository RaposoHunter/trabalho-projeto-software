<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentFormRequest extends FormRequest
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
            'CD_EQPT' => 'required|unique:itr_eqpt,CD_EQPT|max:3',
            'NM_EQPT' => 'required|max:38',
            'DC_TIPO_EQPT' => 'required|max:13',
            'QT_MOTOR' => 'required|integer|min:0',
            'IC_TIPO_PRPS' => 'required|in:M,R',
            'QT_PSGR' => 'nullable|integer|min:0'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_EQPT.unique' => 'O código do equipamento já está em uso',
            'CD_EQPT.max' => 'O código do equipamento deve ter até 3 caracteres',
            'NM_EQPT.max' => 'O nome do equipamento deve ter até 38 caracteres',
            'DC_TIPO_EQPT.max' => 'A descrição do tipo do equipamento deve ter até 13 caracteres',
            'QT_MOTOR.integer' => 'A quantidade de motores deve ser um número inteiro maior que zero',
            'QT_MOTOR.min' => 'A quantidade de motores deve ser um número inteiro maior que zero',
            'IC_TIPO_PRPS.in' => 'Selecione um tipo de equipamento válido',
            'QT_PSGR.integer' => 'A quantidade de passageiros deve ser um número inteiro maior que zero',
            'QT_PSGR.min' => 'A quantidade de passageiros deve ser um número inteiro maior que zero'
        ];
    }
}
