<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    /*
     * Explicação geral dos Models e métodos em Airline.php
     **/

    // Model responsável por gerir os registro referentes à Rotas de Vôo

    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'NR_ROTA_VOO';
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = [
        'CD_ARPT_ORIG',
        'CD_ARPT_DEST',
        'VR_PASG',
    ];

    // Método responsável por recuperar os vôos que utilizam esta rota de vôo
    public function flights()
    {
        return $this->hasMany(Flight::class, 'NR_ROTA_VOO');
    }

    // Método responsável por recuperar os códigos de todas as rotas de vôo
    public static function getCodes()
    {
        $codes = [];

        foreach(self::select('NR_ROTA_VOO')->get() as $flight_route) {
            $codes[] = $flight_route->NR_ROTA_VOO;
        }

        return collect($codes);
    }

    // Método responsável por recuperar as rotas que não possuem nenhuma reserva cadastrada
    public static function getNotReserved()
    {
        $codes = self::getCodes();

        $reserved_flight_routes = FlightRoute::join('itr_voo', 'itr_rota_voo.NR_ROTA_VOO', 'itr_voo.NR_ROTA_VOO')
                                            ->join('itr_resv', function ($join) {
                                                $join->on('itr_resv.NR_VOO', 'itr_voo.NR_VOO')
                                                     ->on('itr_resv.DT_SAIDA_VOO', 'itr_voo.DT_SAIDA_VOO');
                                            })
                                            ->select('itr_voo.NR_ROTA_VOO', DB::raw('count(*) as Reservas'))
                                            ->groupBy('NR_ROTA_VOO')->get();


        $not_reserved_flight_routes = $codes->reject(function ($value, $key) use ($reserved_flight_routes) {
            return !is_null($reserved_flight_routes->find($value));
        });

        $not_reserved_flight_routes = array_values($not_reserved_flight_routes->sort()->toArray());

        $not_reserved = self::find($not_reserved_flight_routes);

        return $not_reserved;
    }
}
