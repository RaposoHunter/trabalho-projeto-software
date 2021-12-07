<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'itr_uf';
    protected $primaryKey = 'SG_UF';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'SG_UF',
        'NM_UF',
    ];

    public function airports()
    {
        return $this->hasMany(Airport::class, 'SG_UF');
    }
}
