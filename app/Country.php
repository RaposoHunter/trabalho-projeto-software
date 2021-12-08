<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Países

    protected $table = 'itr_pais';
    protected $primaryKey = 'CD_PAIS';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CD_PAIS',
        'NM_PAIS',
        'QT_PPLC_PAIS',
    ];

    // Método responsável por recuperar as companhias deste país
    public function airlines()
    {
        return $this->hasMany(Airline::class, 'CD_PAIS');
    }

    // Método responsável por recuperar os aeroportos deste país
    public function airports()
    {
        return $this->hasMany(Airport::class, 'CD_PAIS');
    }

    // Método responsável por recuperar os passageiros nascidos no país
    public function passengers()
    {
        return $this->hasMany(Passenger::class, 'CD_PAIS');
    }
}
