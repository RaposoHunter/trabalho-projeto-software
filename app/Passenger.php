<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'itr_psgr';
    protected $primaryKey = 'CD_PSGR';
    public $timestamps = false;

    protected $fillable = [
        'NM_PSGR',
        'IC_SEXO_PSGR',
        'DT_NASC_PSGR',
        'CD_PAIS',
        'IC_ESTD_CIVIL',
        'CD_PSGR_RESP',
    ];
}
