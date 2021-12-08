<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Reservas

    protected $table = 'itr_resv';
    public $timestamps = false;

    protected $fillable = [
        'CD_PSGR',
        'NR_VOO',
        'DT_SAIDA_VOO',
        'PC_DESC_PASG',
    ];
}
