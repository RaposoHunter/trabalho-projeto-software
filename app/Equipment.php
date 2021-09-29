<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'itr_eqpt';
    protected $primaryKey = 'CD_EQPT';
    public $timestamps = false;

    protected $fillable = [
        'NM_EQPT',
        'DC_TIPO_EQPT',
        'QT_MOTO',
        'IC_TIPO_PRPS',
        'QT_PSGR',
    ];
}
