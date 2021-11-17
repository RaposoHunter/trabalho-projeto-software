<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'itr_arpt';
    protected $primaryKey = 'CD_ARPT';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CD_ARPT',
        'CD_PAIS',
        'SG_UF',
        'NM_CIDD',
    ];

    public static function getCodes()
    {
        $codes = [];

        foreach(self::select('CD_ARPT')->get() as $airport) {
            $codes[] = $airport->CD_ARPT;
        }

        return $codes;
    }

    public static function getCities()
    {
        $cities = [];

        foreach(self::select('NM_CIDD')->distinct()->orderBy('NM_CIDD')->get() as $airport) {
            $cities[] = $airport->NM_CIDD;
        }

        return $cities;
    }
}
