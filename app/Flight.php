<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
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

    public function reserves()
    {
        return $this->hasMany(Reserve::class, 'NR_ROTA_VOO');
    }

    public function airship()
    {
        return $this->belongsTo(Airship::class, 'CD_ARNV');
    }
}
