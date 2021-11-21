<?php

namespace App\Rules;

use App\Flight;
use Illuminate\Contracts\Validation\Rule;

class FlightValidDate implements Rule
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
        $input = request()->all();
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));
        
        $flight = Flight::where('NR_VOO', $value)->where('DT_SAIDA_VOO', $input['DT_SAIDA_VOO'])->first();

        return !is_null($flight);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A data de saída informada não consta para este voo';
    }
}
