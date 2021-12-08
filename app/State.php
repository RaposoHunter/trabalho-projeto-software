<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à UFs

    protected $table = 'itr_uf';
    protected $primaryKey = 'SG_UF';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'SG_UF',
        'NM_UF',
    ];

    // Método responsável por recuperar os aeroportos desta UF
    public function airports()
    {
        return $this->hasMany(Airport::class, 'SG_UF');
    }
}
