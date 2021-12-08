<?php

namespace App\Rules;

use App\Reserve;
use Illuminate\Contracts\Validation\Rule;

class UniqueReserve implements Rule
{
    /*
     * Explicação geral das Rules e métodos em FlightValidDate.php
     **/

    // Rule responsável por validar se a Reserva não existe, antes de ser adicionada,
    // Ou se o vetor de dados <CD_PSGR, NR_VOO, DATA_SAIDA_VOO> já não está em uso por outra Reserva

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $input = request()->all();
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));
        
        $flight = Reserve::where('CD_PSGR', $input['CD_PSGR'])->where('NR_VOO', $value)->where('DT_SAIDA_VOO', $input['DT_SAIDA_VOO'])->first();

        return is_null($flight);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O passageiro já se encontra neste voo';
    }
}
