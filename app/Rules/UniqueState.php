<?php

namespace App\Rules;

use App\State;
use Illuminate\Contracts\Validation\Rule;

class UniqueState implements Rule
{
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
        $id = request()->SG_UF;

        if(request()->_method === 'PUT' && request()->segment(2) == $id) {
            return true;
        }

        return is_null(State::find($id));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A sigla da UF já está em uso';
    }
}
