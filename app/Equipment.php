<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Equipamentos

    protected $table = 'itr_eqpt';
    protected $primaryKey = 'CD_EQPT';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CD_EQPT',
        'NM_EQPT',
        'DC_TIPO_EQPT',
        'QT_MOTOR',
        'IC_TIPO_PRPS',
        'QT_PSGR',
    ];

    // Método responsável por recuperar as aeronaves que utilizam este equipamento
    public function airships()
    {
        return $this->hasMany(Airship::class, 'CD_EQPT');
    }
}
