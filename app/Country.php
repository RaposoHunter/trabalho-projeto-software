<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
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

    public function airlines()
    {
        return $this->hasMany(Airline::class, 'CD_PAIS');
    }

    public function airports()
    {
        return $this->hasMany(Airport::class, 'CD_PAIS');
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class, 'CD_PAIS');
    }
}
