<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRouteFormRequest extends FormRequest
{
    /*
     * Explicação geral dos FormRequests e métodos em AirlineFormRequest.php
     **/

    // FormRequest responsável por validar as requisições referentes à Rotas de Vôo

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
            'CD_ARPT_ORIG' => 'required|exists:itr_arpt,CD_ARPT',
            'CD_ARPT_DEST' => 'required|exists:itr_arpt,CD_ARPT',
            'VR_PASG' => 'nullable|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_ARPT_ORIG.exists' => 'Selecione um aeroporto válido',
            'CD_ARPT_DEST.exists' => 'Selecione um aeroporto válido',
            'VR_PASG.numeric' => 'O valor da passagem deve ser um valor númerico maior que zero',
            'VR_PASG.min' => 'O valor da passagem deve ser um valor númerico maior que zero',
        ];
    }
}
