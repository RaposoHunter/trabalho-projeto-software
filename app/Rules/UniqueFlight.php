<?php

namespace App\Rules;

use App\Flight;
use Illuminate\Contracts\Validation\Rule;

class UniqueFlight implements Rule
{
    /*
     * Explicação geral das Rules e métodos em FlightValidDate.php
     **/

    // Rule responsável por validar se o Voo não existe, antes de ser adicionada,
    // Ou se o par <NR_VOO, DT_SAIDA_VOO> já não está em uso por outro Voo

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

        $flight = Flight::where('NR_VOO', $input['NR_VOO'])->where('DT_SAIDA_VOO', $input['DT_SAIDA_VOO'])->first();

        if($input['_method'] === 'PUT') {
            $same_pks = $input['old_NR_VOO'] == $input['NR_VOO'] && $input['old_DT_SAIDA_VOO'] == $input['DT_SAIDA_VOO'];

            if($same_pks) return true;
        }

        return is_null($flight);
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
