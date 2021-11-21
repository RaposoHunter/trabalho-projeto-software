<?php

namespace App\Rules;

use App\Flight;
use App\Reserve;
use Illuminate\Contracts\Validation\Rule;

class VacantFlight implements Rule
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

        $passenger_cap = $flight->airship->equipment->QT_PSGR;

        $reserves = Reserve::where('NR_VOO', $value)->where('DT_SAIDA_VOO', $input['DT_SAIDA_VOO'])->count();

        return $reserves < $passenger_cap;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O voo selecionado para a data informada não possui assentos vagos';
    }
}
