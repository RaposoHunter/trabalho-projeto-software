<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airship extends Model
{
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

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'CD_EQPT');
    }

    public function flights()
    {
        return $this->hasMany(Flight::class, 'CD_ARNV');
    }
}
