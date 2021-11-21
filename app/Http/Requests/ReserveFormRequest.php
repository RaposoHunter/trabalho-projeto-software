<?php

namespace App\Http\Requests;

use App\Rules\VacantFlight;
use App\Rules\UniqueReserve;
use App\Rules\FlightValidDate;
use Illuminate\Foundation\Http\FormRequest;

class ReserveFormRequest extends FormRequest
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
            'CD_PSGR' => 'required|exists:itr_PSGR,CD_PSGR',
            'DT_SAIDA_VOO' => 'required|date_format:d/m/Y',
            'NR_VOO' => ['required', 'exists:itr_voo,NR_VOO', new FlightValidDate, new UniqueReserve, new VacantFlight], // Checar se o voo requisitado existe com a data enviada; Checar se essa reserva já existe; Checar se o voo está vago
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo Obrigatório',
            'CD_PSGR.exists' => 'Selecione um passageiro válido',
            'DT_SAIDA_VOO.date_format' => 'A data de saída do voo deve estar no formato DD/MM/YYYY',
            'NR_VOO.exists' => 'Selecione um voo válido'
        ];
    }
}
