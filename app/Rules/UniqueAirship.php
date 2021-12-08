<?php

namespace App\Rules;

use App\Airship;
use Illuminate\Contracts\Validation\Rule;

class UniqueAirship implements Rule
{
    /*
     * Explicação geral das Rules e métodos em FlightValidDate.php
     **/

    // Rule responsável por validar se a Aeronave não existe, antes de ser adicionada,
    // Ou se o CD_ARNV já não está em uso por outra Aeronave

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
        $id = request()->CD_ARNV;

        if(request()->_method === 'PUT' && request()->segment(2) == $id) {
            return true;
        }

        return is_null(Airship::find($id));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O código da aeronave já está em uso';
    }
}
