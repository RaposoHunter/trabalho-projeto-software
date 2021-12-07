<?php

namespace App\Rules;

use App\Equipment;
use Illuminate\Contracts\Validation\Rule;

class UniqueEquipment implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        
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
        $id = request()->CD_EQPT;

        if(request()->_method === 'PUT' && request()->segment(2) == $id) {
            return true;
        }

        return is_null(Equipment::find($id));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O código do equipamento já está em uso';
    }
}
