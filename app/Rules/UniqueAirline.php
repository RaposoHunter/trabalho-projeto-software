<?php

namespace App\Rules;

use App\Airline;
use Illuminate\Contracts\Validation\Rule;

class UniqueAirline implements Rule
{
    /*
     * Explicação geral das Rules e métodos em FlightValidDate.php
     **/

    // Rule responsável por validar se a Companhia Aérea não existe, antes de ser adicionada,
    // Ou se o CD_CMPN_AEREA já não está em uso por outra Companhia

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
        $id = request()->CD_CMPN_AEREA;

        if(request()->_method === 'PUT' && request()->segment(2) == $id) {
            return true;
        }

        return is_null(Airline::find($id));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O código da c. aérea já está em uso';
    }
}
