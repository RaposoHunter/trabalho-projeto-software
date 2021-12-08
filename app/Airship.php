<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airship extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Aeronaves

    protected $table = 'itr_arnv';
    protected $primaryKey = 'CD_ARNV';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; 

    protected $fillable = [
        'CD_ARNV',
        'CD_EQPT',
        'CD_CMPN_AEREA',
    ];

    // Método responsável por recuperar o equipamento usado pela aeronave
    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'CD_EQPT');
    }

    // Método responsável por recuperar os voos que utilizam esta aeronave
    public function flights()
    {
        return $this->hasMany(Flight::class, 'CD_ARNV');
    }
}
