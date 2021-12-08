<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Passageiros

    protected $table = 'itr_psgr';
    protected $primaryKey = 'CD_PSGR';
    public $timestamps = false;

    protected $fillable = [
        'NM_PSGR',
        'IC_SEXO_PSGR',
        'DT_NASC_PSGR',
        'CD_PAIS',
        'IC_ESTD_CIVIL',
        'CD_PSGR_RESP',
    ];

    // Método responsável por recuperar as reservas deste passageiro
    public function reserves()
    {
        return $this->hasMany(Reserve::class, 'CD_PSGR');
    }

    // Método responsável por recuperar a idade do passageiro e guardar em um atributo próprio
    public function getAge()
    {
        if(!is_null($this->DT_NASC_PSGR)) {
            $dt_nasc = str_replace('/', '-', $this->DT_NASC_PSGR);
            $this->ID_PSGR = Carbon::parse($dt_nasc)->diffInYears(now());
        } else {
            $this->ID_PSGR = null;
        }
    }
}
