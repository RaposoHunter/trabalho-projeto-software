<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
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

    public function reserves()
    {
        return $this->hasMany(Reserve::class, 'CD_PSGR');
    }

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
