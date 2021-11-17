<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $table = 'itr_cmpn_aerea';
    protected $primaryKey = 'CD_CMPN_AEREA';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CD_CMPN_AEREA',
        'NM_CMPN_AEREA',
        'CD_PAIS',
    ];

    public function airships()
    {
        return $this->hasMany(Airship::class, 'CD_CMPN_AEREA');
    }

    public function getPassengerCapacity()
    {
        $capacity = 0;

        $airships = $this->airships;

        foreach($airships as $airship) {
            $capacity += $airship->equipment->QT_PSGR;
        }

        unset($this->airships);
        $this->QT_TOTAL_PSGR = $capacity;
    }
}
