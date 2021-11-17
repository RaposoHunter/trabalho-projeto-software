<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'NR_ROTA_VOO';
    protected $keyType = 'integer';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'NR_ROTA_VOO',
        'CD_ARPT_ORIG',
        'CD_ARPT_DEST',
        'VR_PASG',
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class, 'NR_ROTA_VOO');
    }

    public static function getCodes()
    {
        $codes = [];

        foreach(self::select('NR_ROTA_VOO')->get() as $flight_route) {
            $codes[] = $flight_route->NR_ROTA_VOO;
        }

        return collect($codes);
    }

    public static function getNotReserved()
    {
        // $t1 = time();

        // $base = self::leftJoin('itr_voo as Voo', 'itr_rota_voo.NR_ROTA_VOO', 'Voo.NR_ROTA_VOO')
        //                     ->leftJoin('itr_resv', 'Voo.NR_VOO', 'itr_resv.NR_VOO')
        //                     ->select('itr_rota_voo.NR_ROTA_VOO', DB::raw('count(*) as "Voos que usam a rota"'))
        //                     ->groupBy('itr_rota_voo.NR_ROTA_VOO')->get();

    
        // $not_used = self::leftJoin('itr_voo as Voo', 'itr_rota_voo.NR_ROTA_VOO', 'Voo.NR_ROTA_VOO')
        //                     ->leftJoin('itr_resv', 'Voo.NR_VOO', 'itr_resv.NR_VOO')
        //                     ->select('itr_rota_voo.NR_ROTA_VOO', DB::raw('count(*) as "Voos sem reserva"'))
        //                     ->whereNull('itr_resv.CD_PSGR')
        //                     ->groupBy('itr_rota_voo.NR_ROTA_VOO')->get();
        
        // // NOTE: Tirar prova real.
        // // Aparentemente está funcionando, mas seria interessante garantir
        // // - Pegar o código de todas as rotas de vôo registradas
        // // - Pegar o código das rotas de vôo que possuem reservas (com inner join)
        // // - Fazer a diferença entre os dois resultados e testar

        // $not_reserved = [];
        
        // foreach($base as $base_flight_route) {
        //     if(!$not_used_flight_route = $not_used->where('NR_ROTA_VOO', $base_flight_route->NR_ROTA_VOO)->first()) {
        //         continue;
        //     }

        //     if($not_used_flight_route->{'Voos sem reserva'} >= $base_flight_route->{'Voos que usam a rota'}) {
        //         $not_reserved[] = $not_used_flight_route->NR_ROTA_VOO;
        //     }
        // }
        
        // $t2 = time();
        // dd($not_reserved, $t2 - $t1);

        $codes = self::getCodes();

        $reserved_flight_routes = FlightRoute::join('itr_voo', 'itr_rota_voo.NR_ROTA_VOO', 'itr_voo.NR_ROTA_VOO')
                                            // ->join('itr_resv', 'itr_resv.NR_VOO', 'itr_voo.NR_VOO')
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
