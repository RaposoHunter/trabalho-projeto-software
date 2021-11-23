<?php

namespace App\Rules;

use App\Flight;
use Illuminate\Contracts\Validation\Rule;

class UniqueFlight implements Rule
{
    private $message = 'Já existe um voo cadastrado com este número e data de saída';

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
        $input = request()->all();
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));

        return is_null(Flight::where('NR_VOO', $input['NR_VOO'])->where('DT_SAIDA_VOO', $input['DT_SAIDA_VOO'])->first());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
