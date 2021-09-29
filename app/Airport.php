<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'itr_arpr';
    protected $primaryKey = 'CD_ARPT';
    public $timestamps = false;

    protected $fillable = [
        'CD_PAIS',
        'SG_UF',
        'NM_CIDD',
    ];
}
