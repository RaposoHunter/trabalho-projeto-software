<?php

namespace App\Rules;

use App\Airport;
use Illuminate\Contracts\Validation\Rule;

class UniqueAirport implements Rule
{
    /*
     * Explicação geral das Rules e métodos em FlightValidDate.php
     **/

    // Rule responsável por validar se o Aeroporto não existe, antes de ser adicionado,
    // Ou se o CD_ARPT já não está em uso por outro aeropoto

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
        $id = request()->CD_ARPT;

        if(request()->_method === 'PUT' && request()->segment(2) == $id) {
            return true;
        }

        return is_null(Airport::find($id));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O código de aeroporto já está em uso';
    }
}
