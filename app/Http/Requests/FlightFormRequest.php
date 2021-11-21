<?php

namespace App\Http\Requests;

use App\Rules\UniqueFlight;
use Illuminate\Foundation\Http\FormRequest;

class FlightFormRequest extends FormRequest
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
            'NR_VOO' => 'required|integer|min:1',
            'DT_SAIDA_VOO' => ['required', 'date_format:d/m/Y', new UniqueFlight],
            'NR_ROTA_VOO' => 'required|exists:itr_rota_voo,NR_ROTA_VOO',
            'CD_ARNV' => 'required|exists:itr_arnv,CD_ARNV',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'integer' => 'O número do voo deve ser um número inteiro positivo maior que 1',
            'min' => 'O número do voo deve ser um número inteiro positivo maior que 1',
            'date_format' => 'A data de saída do voo deve estar no formato DD/MM/YYYY',
            'NR_ROTA_VOO.exists' => 'Selecione uma rota de voo válida',
            'CD_ARNV.exists' => 'Selecione uma aeronave válida',
        ];
    }
}
