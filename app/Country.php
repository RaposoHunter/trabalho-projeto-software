<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'itr_pais';
    protected $primaryKey = 'CD_PAIS';
    public $timestamps = false;

    protected $fillable = [
        'NM_PAIS',
        'QT_PPLC_PAIS',
    ];
}
