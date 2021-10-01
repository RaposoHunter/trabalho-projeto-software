<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'NR_ROTA_VOO';
    protected $keyType = 'integer';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'NR_ROTA_VOO',
        'CD_ARPT_ORIG',
        'CD_ARPT_DEST',
        'VR_PASG',
    ];
}
