<?php

namespace App\Rules;

use App\FlightRoute;
use Illuminate\Contracts\Validation\Rule;

class UniqueFlightRoute implements Rule
{
    /*
     * Explicação geral das Rules e métodos em FlightValidDate.php
     **/

    // Rule responsável por validar se a Rota de Vôo não existe, antes de ser adicionada,
    // Ou se o NR_ROTA_VOO já não está em uso por outra Rota de Vôo

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
        $id = request()->NR_ROTA_VOO;

        if(request()->_method === 'PUT' && request()->segment(2) == $id) {
            return true;
        }

        return is_null(FlightRoute::find($id));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
