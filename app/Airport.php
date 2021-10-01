<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'itr_arpr';
    protected $primaryKey = 'CD_ARPT';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CD_ARPT',
        'CD_PAIS',
        'SG_UF',
        'NM_CIDD',
    ];
}
