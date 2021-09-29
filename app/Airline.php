<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $table = 'itr_cmpn_aerea';
    protected $primaryKey = 'CD_CMPN_AEREA';
    public $timestamps = false;

    protected $fillable = [
        'NM_CMPN_AEREA',
        'CD_PAIS',
    ];
}
