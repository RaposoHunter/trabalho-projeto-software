<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'itr_voo';
    public $timestamps = false;

    protected $fillable = [
        'NR_VOO',
        'DT_SAIDA_VOO',
        'NR_ROTA_VOO',
        'CD_ARNV',
    ];
}
