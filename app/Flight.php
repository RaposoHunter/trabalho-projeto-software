<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Vôos

    protected $table = 'itr_voo';
    protected $primaryKey = 'NR_VOO';
    protected $keyType = 'integer';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'NR_VOO',
        'DT_SAIDA_VOO',
        'NR_ROTA_VOO',
        'CD_ARNV',
    ];

    // Método responsável por recuperar as reservas para este vôo
    public function getReserves()
    {
        return Reserve::where('NR_VOO', $this->NR_VOO)->where('DT_SAIDA_VOO', $this->DT_SAIDA_VOO)->get();
    }

    // Método responsável por recuperar a aeronave atrelada a este vôo
    public function airship()
    {
        return $this->belongsTo(Airship::class, 'CD_ARNV');
    }
}
