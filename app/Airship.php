<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airship extends Model
{
    protected $table = 'itr_arnv';
    protected $primaryKey = 'CD_ARNV';
    public $timestamps = false; 

    protected $fillable = [
        'CD_EQPT',
        'CMPN_AEREA',
    ];
}
