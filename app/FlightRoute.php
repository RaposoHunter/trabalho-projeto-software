<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'NR_ROTA_VOO';
    public $timestamps = false;

    protected $fillable = [
        'CD_ARPT_ORIG',
        'CD_ARPT_DEST',
        'VR_PASG',
    ];
}
