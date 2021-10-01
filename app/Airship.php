<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airship extends Model
{
    protected $table = 'itr_arnv';
    protected $primaryKey = 'CD_ARNV';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; 

    protected $fillable = [
        'CD_ARNV',
        'CD_EQPT',
        'CMPN_AEREA',
    ];
}
