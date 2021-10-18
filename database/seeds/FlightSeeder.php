<?php

use App\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::create([
            'NR_VOO' => 1,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 1,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 61,
            'CD_ARNV' => 'TTKNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 1,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 399,
            'CD_ARNV' => 'TTOCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 1,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 100,
            'CD_ARNV' => 'TTKBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 1,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 30,
            'CD_ARNV' => 'TTKZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 1,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 71,
            'CD_ARNV' => 'TTKNH',
        ]);
        
        Flight::create([
            'NR_VOO' => 2,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 160,
            'CD_ARNV' => 'TTKZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 2,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 402,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 2,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 100,
            'CD_ARNV' => 'TTKBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 3,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 336,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 3,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 180,
            'CD_ARNV' => 'TTKZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 3,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 100,
            'CD_ARNV' => 'TTKBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 3,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 2,
            'CD_ARNV' => 'TTINI',
        ]);
        
        Flight::create([
            'NR_VOO' => 4,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 310,
            'CD_ARNV' => 'TTKBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 4,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 411,
            'CD_ARNV' => 'TTUZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 4,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 2,
            'CD_ARNV' => 'TTINS',
        ]);
        
        Flight::create([
            'NR_VOO' => 5,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 351,
            'CD_ARNV' => 'TTIZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 5,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 110,
            'CD_ARNV' => 'TTKBU',
        ]);
        
        Flight::create([
            'NR_VOO' => 5,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTSNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 6,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 420,
            'CD_ARNV' => 'TTSBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 6,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 32,
            'CD_ARNV' => 'TTINS',
        ]);
        
        Flight::create([
            'NR_VOO' => 6,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 326,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 6,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 6,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 191,
            'CD_ARNV' => 'TTKZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 7,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 42,
            'CD_ARNV' => 'TTING',
        ]);
        
        Flight::create([
            'NR_VOO' => 7,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 130,
            'CD_ARNV' => 'TTOBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 7,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 7,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 402,
            'CD_ARNV' => 'TTKZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 8,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 130,
            'CD_ARNV' => 'TTKBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 8,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTOZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 8,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 352,
            'CD_ARNV' => 'TTONT',
        ]);
        
        Flight::create([
            'NR_VOO' => 9,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 72,
            'CD_ARNV' => 'TTUZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 9,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 170,
            'CD_ARNV' => 'TTOBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 9,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 352,
            'CD_ARNV' => 'TTINC',
        ]);
        
        Flight::create([
            'NR_VOO' => 10,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTIZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 10,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 280,
            'CD_ARNV' => 'TTKBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 10,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 362,
            'CD_ARNV' => 'TTKNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 11,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 4,
            'CD_ARNV' => 'TTKZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 11,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 49,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 11,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 90,
            'CD_ARNV' => 'TTKBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 12,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 61,
            'CD_ARNV' => 'TTONN',
        ]);
        
        Flight::create([
            'NR_VOO' => 12,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 134,
            'CD_ARNV' => 'TTIZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 13,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 401,
            'CD_ARNV' => 'TTKBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 13,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 272,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 13,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTIZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 14,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 55,
            'CD_ARNV' => 'TTIZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 14,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTLBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 15,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 15,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 182,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 15,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 165,
            'CD_ARNV' => 'TTKZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 16,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 75,
            'CD_ARNV' => 'TTIZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 16,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 151,
            'CD_ARNV' => 'TTSBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 16,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTONS',
        ]);
        
        Flight::create([
            'NR_VOO' => 17,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 26,
            'CD_ARNV' => 'TTOZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 17,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 151,
            'CD_ARNV' => 'TTSBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 17,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 292,
            'CD_ARNV' => 'TTKNH',
        ]);
        
        Flight::create([
            'NR_VOO' => 18,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 236,
            'CD_ARNV' => 'TTOZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 18,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 392,
            'CD_ARNV' => 'TTING',
        ]);
        
        Flight::create([
            'NR_VOO' => 18,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 18,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 181,
            'CD_ARNV' => 'TTKBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 19,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 112,
            'CD_ARNV' => 'TTOBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 19,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTOZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 19,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 3,
            'CD_ARNV' => 'TTKNH',
        ]);
        
        Flight::create([
            'NR_VOO' => 20,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 76,
            'CD_ARNV' => 'TTKZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 20,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 26,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 20,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 332,
            'CD_ARNV' => 'TTLBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 21,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 227,
            'CD_ARNV' => 'TTIZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 21,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 21,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 313,
            'CD_ARNV' => 'TTINT',
        ]);
        
        Flight::create([
            'NR_VOO' => 21,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 352,
            'CD_ARNV' => 'TTKBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 22,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 57,
            'CD_ARNV' => 'TTOZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 22,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 22,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 92,
            'CD_ARNV' => 'TTOBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 22,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 313,
            'CD_ARNV' => 'TTINS',
        ]);
        
        Flight::create([
            'NR_VOO' => 23,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 377,
            'CD_ARNV' => 'TTKZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 23,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKND',
        ]);
        
        Flight::create([
            'NR_VOO' => 23,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 24,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 203,
            'CD_ARNV' => 'TTKBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 24,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 187,
            'CD_ARNV' => 'TTKZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 24,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 133,
            'CD_ARNV' => 'TTINC',
        ]);
        
        Flight::create([
            'NR_VOO' => 25,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 213,
            'CD_ARNV' => 'TTKBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 25,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 128,
            'CD_ARNV' => 'TTKZZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 25,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 343,
            'CD_ARNV' => 'TTSNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 26,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 358,
            'CD_ARNV' => 'TTKZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 26,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 53,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 26,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 26,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 143,
            'CD_ARNV' => 'TTMBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 27,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 253,
            'CD_ARNV' => 'TTKBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 27,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 153,
            'CD_ARNV' => 'TTKNT',
        ]);
        
        Flight::create([
            'NR_VOO' => 27,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTIZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 28,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 53,
            'CD_ARNV' => 'TTINO',
        ]);
        
        Flight::create([
            'NR_VOO' => 28,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 378,
            'CD_ARNV' => 'TTUZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 29,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 174,
            'CD_ARNV' => 'TTFON',
        ]);
        
        Flight::create([
            'NR_VOO' => 29,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 53,
            'CD_ARNV' => 'TTINT',
        ]);
        
        Flight::create([
            'NR_VOO' => 29,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 19,
            'CD_ARNV' => 'TTUZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 29,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTMBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 30,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTMBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 30,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 29,
            'CD_ARNV' => 'TTIZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 30,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 263,
            'CD_ARNV' => 'TTINV',
        ]);
        
        Flight::create([
            'NR_VOO' => 31,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 39,
            'CD_ARNV' => 'TTKZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 31,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 163,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 31,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 407,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 31,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 214,
            'CD_ARNV' => 'TTLBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 31,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTINC',
        ]);
        
        Flight::create([
            'NR_VOO' => 32,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 126,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 32,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 393,
            'CD_ARNV' => 'TTSNY',
        ]);
        
        Flight::create([
            'NR_VOO' => 32,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 324,
            'CD_ARNV' => 'TTLBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 32,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 239,
            'CD_ARNV' => 'TTKZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 33,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 164,
            'CD_ARNV' => 'TTMBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 33,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 380,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 33,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 204,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 33,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 33,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTKZO',
        ]);
        
        Flight::create([
            'NR_VOO' => 34,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTKBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 34,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 279,
            'CD_ARNV' => 'TTIZI',
        ]);
        
        Flight::create([
            'NR_VOO' => 34,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 104,
            'CD_ARNV' => 'TTKNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 35,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 200,
            'CD_ARNV' => 'TTIYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 35,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 315,
            'CD_ARNV' => 'TTLBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 36,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 215,
            'CD_ARNV' => 'TTKBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 36,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 60,
            'CD_ARNV' => 'TTKYN',
        ]);
        
        Flight::create([
            'NR_VOO' => 37,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 290,
            'CD_ARNV' => 'TTIYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 37,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 215,
            'CD_ARNV' => 'TTKBU',
        ]);
        
        Flight::create([
            'NR_VOO' => 38,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 244,
            'CD_ARNV' => 'TTONI',
        ]);
        
        Flight::create([
            'NR_VOO' => 38,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTRBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 38,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 301,
            'CD_ARNV' => 'TTKYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 39,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 244,
            'CD_ARNV' => 'TTONI',
        ]);
        
        Flight::create([
            'NR_VOO' => 39,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 341,
            'CD_ARNV' => 'TTKYR',
        ]);
        
        Flight::create([
            'NR_VOO' => 39,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTOBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 40,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 381,
            'CD_ARNV' => 'TTIYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 40,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 64,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 40,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 65,
            'CD_ARNV' => 'TTKBI',
        ]);
        
        Flight::create([
            'NR_VOO' => 40,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 144,
            'CD_ARNV' => 'TTINT',
        ]);
        
        Flight::create([
            'NR_VOO' => 41,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 222,
            'CD_ARNV' => 'TTKYR',
        ]);
        
        Flight::create([
            'NR_VOO' => 41,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 286,
            'CD_ARNV' => 'TTRBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 41,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 54,
            'CD_ARNV' => 'TTKNT',
        ]);
        
        Flight::create([
            'NR_VOO' => 42,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 57,
            'CD_ARNV' => 'TTSBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 42,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 54,
            'CD_ARNV' => 'TTKNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 43,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 77,
            'CD_ARNV' => 'TTSBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 43,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 54,
            'CD_ARNV' => 'TTKNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 43,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 94,
            'CD_ARNV' => 'TTKYN',
        ]);
        
        Flight::create([
            'NR_VOO' => 44,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 264,
            'CD_ARNV' => 'TTKNT',
        ]);
        
        Flight::create([
            'NR_VOO' => 44,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 155,
            'CD_ARNV' => 'TTKYL',
        ]);
        
        Flight::create([
            'NR_VOO' => 44,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 187,
            'CD_ARNV' => 'TTMBR',
        ]);
        
        Flight::create([
            'NR_VOO' => 45,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 264,
            'CD_ARNV' => 'TTKNT',
        ]);
        
        Flight::create([
            'NR_VOO' => 45,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 306,
            'CD_ARNV' => 'TTKYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 45,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 218,
            'CD_ARNV' => 'TTKBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 46,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 74,
            'CD_ARNV' => 'TTKNR',
        ]);
        
        Flight::create([
            'NR_VOO' => 46,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 306,
            'CD_ARNV' => 'TTKYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 46,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 28,
            'CD_ARNV' => 'TTKBS',
        ]);
        
        Flight::create([
            'NR_VOO' => 47,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 105,
            'CD_ARNV' => 'TTING',
        ]);
        
        Flight::create([
            'NR_VOO' => 47,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTUDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 47,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 148,
            'CD_ARNV' => 'TTKBU',
        ]);
        
        Flight::create([
            'NR_VOO' => 47,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 226,
            'CD_ARNV' => 'TTKYN',
        ]);
        
        Flight::create([
            'NR_VOO' => 48,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 136,
            'CD_ARNV' => 'TTKYR',
        ]);
        
        Flight::create([
            'NR_VOO' => 48,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 419,
            'CD_ARNV' => 'TTKBU',
        ]);
        
        Flight::create([
            'NR_VOO' => 49,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 236,
            'CD_ARNV' => 'TTIYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 49,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 13,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 49,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 415,
            'CD_ARNV' => 'TTSNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 49,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTKBU',
        ]);
        
        Flight::create([
            'NR_VOO' => 50,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 247,
            'CD_ARNV' => 'TTKYL',
        ]);
        
        Flight::create([
            'NR_VOO' => 50,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 50,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 50,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 379,
            'CD_ARNV' => 'TTRBO',
        ]);
        
        Flight::create([
            'NR_VOO' => 50,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTSNY',
        ]);
        
        Flight::create([
            'NR_VOO' => 51,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 167,
            'CD_ARNV' => 'TTIYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 51,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTKNG',
        ]);
        
        Flight::create([
            'NR_VOO' => 51,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 400,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 52,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 345,
            'CD_ARNV' => 'TTONS',
        ]);
        
        Flight::create([
            'NR_VOO' => 52,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 418,
            'CD_ARNV' => 'TTKYO',
        ]);
        
        Flight::create([
            'NR_VOO' => 52,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 1,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 53,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 228,
            'CD_ARNV' => 'TTKYR',
        ]);
        
        Flight::create([
            'NR_VOO' => 53,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 232,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 54,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 54,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 255,
            'CD_ARNV' => 'TTKNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 54,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 328,
            'CD_ARNV' => 'TTKYN',
        ]);
        
        Flight::create([
            'NR_VOO' => 55,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 155,
            'CD_ARNV' => 'TTING',
        ]);
        
        Flight::create([
            'NR_VOO' => 55,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 56,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 243,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 56,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 288,
            'CD_ARNV' => 'TTKYL',
        ]);
        
        Flight::create([
            'NR_VOO' => 56,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 255,
            'CD_ARNV' => 'TTINI',
        ]);
        
        Flight::create([
            'NR_VOO' => 57,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 172,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 57,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 255,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 57,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 188,
            'CD_ARNV' => 'TTKYN',
        ]);
        
        Flight::create([
            'NR_VOO' => 58,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 309,
            'CD_ARNV' => 'TTKYL',
        ]);
        
        Flight::create([
            'NR_VOO' => 58,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 207,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 58,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 165,
            'CD_ARNV' => 'TTONN',
        ]);
        
        Flight::create([
            'NR_VOO' => 59,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 175,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 60,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 285,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 60,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 321,
            'CD_ARNV' => 'TTKXL',
        ]);
        
        Flight::create([
            'NR_VOO' => 61,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 185,
            'CD_ARNV' => 'TTUNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 61,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 321,
            'CD_ARNV' => 'TTKXL',
        ]);
        
        Flight::create([
            'NR_VOO' => 61,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 362,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 62,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 295,
            'CD_ARNV' => 'TTKND',
        ]);
        
        Flight::create([
            'NR_VOO' => 62,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 321,
            'CD_ARNV' => 'TTKXL',
        ]);
        
        Flight::create([
            'NR_VOO' => 63,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 51,
            'CD_ARNV' => 'TTKXP',
        ]);
        
        Flight::create([
            'NR_VOO' => 63,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 116,
            'CD_ARNV' => 'TTKNH',
        ]);
        
        Flight::create([
            'NR_VOO' => 64,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 422,
            'CD_ARNV' => 'TTKXP',
        ]);
        
        Flight::create([
            'NR_VOO' => 64,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTINT',
        ]);
        
        Flight::create([
            'NR_VOO' => 65,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 293,
            'CD_ARNV' => 'TTKXP',
        ]);
        
        Flight::create([
            'NR_VOO' => 65,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 336,
            'CD_ARNV' => 'TTKNR',
        ]);
        
        Flight::create([
            'NR_VOO' => 66,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 48,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 66,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 315,
            'CD_ARNV' => 'TTKXL',
        ]);
        
        Flight::create([
            'NR_VOO' => 66,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 246,
            'CD_ARNV' => 'TTKNR',
        ]);
        
        Flight::create([
            'NR_VOO' => 67,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 276,
            'CD_ARNV' => 'TTKNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 67,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 127,
            'CD_ARNV' => 'TTKXP',
        ]);
        
        Flight::create([
            'NR_VOO' => 68,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 352,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 68,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 198,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 68,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTKXL',
        ]);
        
        Flight::create([
            'NR_VOO' => 68,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 276,
            'CD_ARNV' => 'TTKNT',
        ]);
        
        Flight::create([
            'NR_VOO' => 69,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 397,
            'CD_ARNV' => 'TTKXP',
        ]);
        
        Flight::create([
            'NR_VOO' => 69,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 176,
            'CD_ARNV' => 'TTIND',
        ]);
        
        Flight::create([
            'NR_VOO' => 70,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 101,
            'CD_ARNV' => 'TTKWT',
        ]);
        
        Flight::create([
            'NR_VOO' => 70,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 286,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 71,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 412,
            'CD_ARNV' => 'TTKWT',
        ]);
        
        Flight::create([
            'NR_VOO' => 71,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 196,
            'CD_ARNV' => 'TTKNS',
        ]);
        
        Flight::create([
            'NR_VOO' => 72,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 321,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 72,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 87,
            'CD_ARNV' => 'TTKWT',
        ]);
        
        Flight::create([
            'NR_VOO' => 72,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 307,
            'CD_ARNV' => 'TTKNS',
        ]);
        
        Flight::create([
            'NR_VOO' => 73,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 87,
            'CD_ARNV' => 'TTKWT',
        ]);
        
        Flight::create([
            'NR_VOO' => 73,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 107,
            'CD_ARNV' => 'TTIND',
        ]);
        
        Flight::create([
            'NR_VOO' => 74,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTKNU',
        ]);
        
        Flight::create([
            'NR_VOO' => 74,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTONI',
        ]);
        
        Flight::create([
            'NR_VOO' => 74,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 49,
            'CD_ARNV' => 'TTKWT',
        ]);
        
        Flight::create([
            'NR_VOO' => 74,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 75,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 27,
            'CD_ARNV' => 'TTKND',
        ]);
        
        Flight::create([
            'NR_VOO' => 75,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 118,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 75,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 8,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 75,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 340,
            'CD_ARNV' => 'TTLVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 76,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 50,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 76,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 131,
            'CD_ARNV' => 'TTLVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 76,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 127,
            'CD_ARNV' => 'TTKNR',
        ]);
        
        Flight::create([
            'NR_VOO' => 77,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 31,
            'CD_ARNV' => 'TTIVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 77,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 164,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 77,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 357,
            'CD_ARNV' => 'TTKNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 78,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 357,
            'CD_ARNV' => 'TTKNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 78,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 371,
            'CD_ARNV' => 'TTKVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 79,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 357,
            'CD_ARNV' => 'TTKNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 79,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 181,
            'CD_ARNV' => 'TTKVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 80,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 202,
            'CD_ARNV' => 'TTLVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 80,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 157,
            'CD_ARNV' => 'TTINV',
        ]);
        
        Flight::create([
            'NR_VOO' => 81,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 232,
            'CD_ARNV' => 'TTIVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 82,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 157,
            'CD_ARNV' => 'TTINT',
        ]);
        
        Flight::create([
            'NR_VOO' => 82,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 233,
            'CD_ARNV' => 'TTLVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 83,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 404,
            'CD_ARNV' => 'TTIVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 83,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 267,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 84,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 267,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 84,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 214,
            'CD_ARNV' => 'TTLVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 85,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 105,
            'CD_ARNV' => 'TTIVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 85,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 277,
            'CD_ARNV' => 'TTONC',
        ]);
        
        Flight::create([
            'NR_VOO' => 86,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 197,
            'CD_ARNV' => 'TTKNG',
        ]);
        
        Flight::create([
            'NR_VOO' => 86,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTKVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 87,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 8,
            'CD_ARNV' => 'TTSNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 87,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTKVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 88,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 408,
            'CD_ARNV' => 'TTKNS',
        ]);
        
        Flight::create([
            'NR_VOO' => 88,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 227,
            'CD_ARNV' => 'TTIVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 89,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 208,
            'CD_ARNV' => 'TTKNV',
        ]);
        
        Flight::create([
            'NR_VOO' => 89,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 389,
            'CD_ARNV' => 'TTKVI',
        ]);
        
        Flight::create([
            'NR_VOO' => 90,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 300,
            'CD_ARNV' => 'TTSUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 90,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 308,
            'CD_ARNV' => 'TTINO',
        ]);
        
        Flight::create([
            'NR_VOO' => 91,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 410,
            'CD_ARNV' => 'TTLUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 91,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTUNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 92,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 120,
            'CD_ARNV' => 'TTKUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 92,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 118,
            'CD_ARNV' => 'TTKNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 93,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 320,
            'CD_ARNV' => 'TTOUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 93,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 328,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 94,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 230,
            'CD_ARNV' => 'TTKUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 94,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 81,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 95,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 48,
            'CD_ARNV' => 'TTONI',
        ]);
        
        Flight::create([
            'NR_VOO' => 95,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTGUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 96,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 96,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 48,
            'CD_ARNV' => 'TTKNV',
        ]);
        
        Flight::create([
            'NR_VOO' => 96,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 50,
            'CD_ARNV' => 'TTOUT',
        ]);
        
        Flight::create([
            'NR_VOO' => 97,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 97,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 48,
            'CD_ARNV' => 'TTKNS',
        ]);
        
        Flight::create([
            'NR_VOO' => 97,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 280,
            'CD_ARNV' => 'TTDUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 98,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 1,
            'CD_ARNV' => 'TTKUG',
        ]);
        
        Flight::create([
            'NR_VOO' => 98,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTSNY',
        ]);
        
        Flight::create([
            'NR_VOO' => 99,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 158,
            'CD_ARNV' => 'TTKNS',
        ]);
        
        Flight::create([
            'NR_VOO' => 99,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 11,
            'CD_ARNV' => 'TTDUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 100,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 311,
            'CD_ARNV' => 'TTGUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 100,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 168,
            'CD_ARNV' => 'TTONC',
        ]);
        
        Flight::create([
            'NR_VOO' => 101,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 421,
            'CD_ARNV' => 'TTLUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 101,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 268,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 102,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTOUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 103,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 331,
            'CD_ARNV' => 'TTKUG',
        ]);
        
        Flight::create([
            'NR_VOO' => 103,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTUNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 104,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 388,
            'CD_ARNV' => 'TTINV',
        ]);
        
        Flight::create([
            'NR_VOO' => 104,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 331,
            'CD_ARNV' => 'TTGUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 104,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 105,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 398,
            'CD_ARNV' => 'TTONC',
        ]);
        
        Flight::create([
            'NR_VOO' => 105,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 241,
            'CD_ARNV' => 'TTKUG',
        ]);
        
        Flight::create([
            'NR_VOO' => 106,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 151,
            'CD_ARNV' => 'TTKUF',
        ]);
        
        Flight::create([
            'NR_VOO' => 106,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 298,
            'CD_ARNV' => 'TTKNH',
        ]);
        
        Flight::create([
            'NR_VOO' => 107,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 209,
            'CD_ARNV' => 'TTONT',
        ]);
        
        Flight::create([
            'NR_VOO' => 107,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 251,
            'CD_ARNV' => 'TTTUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 108,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 109,
            'CD_ARNV' => 'TTKND',
        ]);
        
        Flight::create([
            'NR_VOO' => 108,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 370,
            'CD_ARNV' => 'TTONN',
        ]);
        
        Flight::create([
            'NR_VOO' => 108,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 361,
            'CD_ARNV' => 'TTLUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 109,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 109,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 61,
            'CD_ARNV' => 'TTKUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 110,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 309,
            'CD_ARNV' => 'TTING',
        ]);
        
        Flight::create([
            'NR_VOO' => 110,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 161,
            'CD_ARNV' => 'TTTUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 111,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 209,
            'CD_ARNV' => 'TTINS',
        ]);
        
        Flight::create([
            'NR_VOO' => 111,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 171,
            'CD_ARNV' => 'TTDUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 112,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 209,
            'CD_ARNV' => 'TTINO',
        ]);
        
        Flight::create([
            'NR_VOO' => 112,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 71,
            'CD_ARNV' => 'TTKUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 113,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 219,
            'CD_ARNV' => 'TTKNG',
        ]);
        
        Flight::create([
            'NR_VOO' => 113,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 181,
            'CD_ARNV' => 'TTDUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 114,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 381,
            'CD_ARNV' => 'TTKUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 114,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 114,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 29,
            'CD_ARNV' => 'TTONN',
        ]);
        
        Flight::create([
            'NR_VOO' => 115,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 81,
            'CD_ARNV' => 'TTKUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 115,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 329,
            'CD_ARNV' => 'TTONT',
        ]);
        
        Flight::create([
            'NR_VOO' => 116,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 381,
            'CD_ARNV' => 'TTSUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 116,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 129,
            'CD_ARNV' => 'TTIND',
        ]);
        
        Flight::create([
            'NR_VOO' => 117,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 302,
            'CD_ARNV' => 'TTKUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 117,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 129,
            'CD_ARNV' => 'TTIND',
        ]);
        
        Flight::create([
            'NR_VOO' => 118,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 412,
            'CD_ARNV' => 'TTGUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 118,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 139,
            'CD_ARNV' => 'TTONI',
        ]);
        
        Flight::create([
            'NR_VOO' => 119,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 412,
            'CD_ARNV' => 'TTGUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 119,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 339,
            'CD_ARNV' => 'TTKNV',
        ]);
        
        Flight::create([
            'NR_VOO' => 120,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTIND',
        ]);
        
        Flight::create([
            'NR_VOO' => 120,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 322,
            'CD_ARNV' => 'TTDUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 121,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTKNG',
        ]);
        
        Flight::create([
            'NR_VOO' => 121,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 322,
            'CD_ARNV' => 'TTIUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 122,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 161,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 122,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 32,
            'CD_ARNV' => 'TTKUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 122,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 169,
            'CD_ARNV' => 'TTONC',
        ]);
        
        Flight::create([
            'NR_VOO' => 123,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 132,
            'CD_ARNV' => 'TTKUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 123,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 269,
            'CD_ARNV' => 'TTSNY',
        ]);
        
        Flight::create([
            'NR_VOO' => 124,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 332,
            'CD_ARNV' => 'TTGUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 124,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 279,
            'CD_ARNV' => 'TTKNU',
        ]);
        
        Flight::create([
            'NR_VOO' => 125,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTODO',
        ]);
        
        Flight::create([
            'NR_VOO' => 125,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 89,
            'CD_ARNV' => 'TTKNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 125,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 242,
            'CD_ARNV' => 'TTKUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 126,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 89,
            'CD_ARNV' => 'TTKND',
        ]);
        
        Flight::create([
            'NR_VOO' => 126,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 142,
            'CD_ARNV' => 'TTGUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 127,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 342,
            'CD_ARNV' => 'TTOUT',
        ]);
        
        Flight::create([
            'NR_VOO' => 127,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTINV',
        ]);
        
        Flight::create([
            'NR_VOO' => 128,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 342,
            'CD_ARNV' => 'TTOUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 128,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 399,
            'CD_ARNV' => 'TTKNU',
        ]);
        
        Flight::create([
            'NR_VOO' => 129,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 210,
            'CD_ARNV' => 'TTLMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 129,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 197,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 129,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 152,
            'CD_ARNV' => 'TTOUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 130,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 420,
            'CD_ARNV' => 'TTIMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 130,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 252,
            'CD_ARNV' => 'TTOUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 131,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 131,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 62,
            'CD_ARNV' => 'TTKUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 131,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTUMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 132,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 282,
            'CD_ARNV' => 'TTKUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 132,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 230,
            'CD_ARNV' => 'TTKMP',
        ]);
        
        Flight::create([
            'NR_VOO' => 133,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTLOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 133,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 82,
            'CD_ARNV' => 'TTKUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 134,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 418,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 134,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 82,
            'CD_ARNV' => 'TTTUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 134,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 150,
            'CD_ARNV' => 'TTKMU',
        ]);
        
        Flight::create([
            'NR_VOO' => 135,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 135,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 282,
            'CD_ARNV' => 'TTQUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 135,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 135,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 70,
            'CD_ARNV' => 'TTDMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 136,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 182,
            'CD_ARNV' => 'TTOUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 136,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 170,
            'CD_ARNV' => 'TTOMF',
        ]);
        
        Flight::create([
            'NR_VOO' => 137,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 80,
            'CD_ARNV' => 'TTKMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 137,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 292,
            'CD_ARNV' => 'TTKUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 138,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 390,
            'CD_ARNV' => 'TTIMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 138,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 3,
            'CD_ARNV' => 'TTDUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 139,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 413,
            'CD_ARNV' => 'TTKUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 139,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 311,
            'CD_ARNV' => 'TTOMF',
        ]);
        
        Flight::create([
            'NR_VOO' => 140,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 413,
            'CD_ARNV' => 'TTKUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 140,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 397,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 140,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 231,
            'CD_ARNV' => 'TTIMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 141,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 213,
            'CD_ARNV' => 'TTRUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 141,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 141,
            'CD_ARNV' => 'TTIMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 142,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 241,
            'CD_ARNV' => 'TTLMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 142,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 233,
            'CD_ARNV' => 'TTOUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 143,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 171,
            'CD_ARNV' => 'TTKMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 143,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 33,
            'CD_ARNV' => 'TTOUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 144,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTTUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 144,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 191,
            'CD_ARNV' => 'TTKMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 145,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 145,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 163,
            'CD_ARNV' => 'TTDUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 145,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 191,
            'CD_ARNV' => 'TTKMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 146,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 383,
            'CD_ARNV' => 'TTKUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 146,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 191,
            'CD_ARNV' => 'TTKMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 147,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 383,
            'CD_ARNV' => 'TTKUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 147,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 312,
            'CD_ARNV' => 'TTOMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 148,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 22,
            'CD_ARNV' => 'TTLMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 148,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTOUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 149,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTOUT',
        ]);
        
        Flight::create([
            'NR_VOO' => 149,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 352,
            'CD_ARNV' => 'TTLMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 150,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 293,
            'CD_ARNV' => 'TTQUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 150,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 150,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 62,
            'CD_ARNV' => 'TTKMP',
        ]);
        
        Flight::create([
            'NR_VOO' => 151,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 151,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 82,
            'CD_ARNV' => 'TTOMF',
        ]);
        
        Flight::create([
            'NR_VOO' => 151,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 393,
            'CD_ARNV' => 'TTOUT',
        ]);
        
        Flight::create([
            'NR_VOO' => 152,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 4,
            'CD_ARNV' => 'TTRUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 152,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 182,
            'CD_ARNV' => 'TTKMU',
        ]);
        
        Flight::create([
            'NR_VOO' => 153,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 214,
            'CD_ARNV' => 'TTRUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 153,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 113,
            'CD_ARNV' => 'TTKMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 154,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 113,
            'CD_ARNV' => 'TTKMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 154,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 334,
            'CD_ARNV' => 'TTKUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 155,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 223,
            'CD_ARNV' => 'TTUMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 155,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 234,
            'CD_ARNV' => 'TTOUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 156,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTKMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 156,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 344,
            'CD_ARNV' => 'TTTUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 157,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTLOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 157,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 54,
            'CD_ARNV' => 'TTKUF',
        ]);
        
        Flight::create([
            'NR_VOO' => 157,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTKMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 158,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 264,
            'CD_ARNV' => 'TTKUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 158,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 193,
            'CD_ARNV' => 'TTLMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 159,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 74,
            'CD_ARNV' => 'TTKUC',
        ]);
        
        Flight::create([
            'NR_VOO' => 159,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 397,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 159,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 204,
            'CD_ARNV' => 'TTKMU',
        ]);
        
        Flight::create([
            'NR_VOO' => 160,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTKUF',
        ]);
        
        Flight::create([
            'NR_VOO' => 160,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 287,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 160,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 414,
            'CD_ARNV' => 'TTLMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 161,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 24,
            'CD_ARNV' => 'TTOMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 161,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 186,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 161,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 284,
            'CD_ARNV' => 'TTTUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 162,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 162,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 294,
            'CD_ARNV' => 'TTDUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 162,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 144,
            'CD_ARNV' => 'TTDMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 163,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 294,
            'CD_ARNV' => 'TTKUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 163,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTOMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 164,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTRUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 164,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 254,
            'CD_ARNV' => 'TTKMP',
        ]);
        
        Flight::create([
            'NR_VOO' => 165,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 335,
            'CD_ARNV' => 'TTDUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 166,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 205,
            'CD_ARNV' => 'TTKMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 166,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 235,
            'CD_ARNV' => 'TTOUT',
        ]);
        
        Flight::create([
            'NR_VOO' => 167,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTDUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 167,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 15,
            'CD_ARNV' => 'TTUMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 168,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTKUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 168,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 206,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 168,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 225,
            'CD_ARNV' => 'TTKMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 169,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 355,
            'CD_ARNV' => 'TTQUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 169,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 11,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 169,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 225,
            'CD_ARNV' => 'TTKMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 170,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 275,
            'CD_ARNV' => 'TTTUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 170,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 135,
            'CD_ARNV' => 'TTKMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 171,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 295,
            'CD_ARNV' => 'TTLUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 171,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 275,
            'CD_ARNV' => 'TTLMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 172,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 56,
            'CD_ARNV' => 'TTKMU',
        ]);
        
        Flight::create([
            'NR_VOO' => 172,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTIUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 173,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 86,
            'CD_ARNV' => 'TTKMP',
        ]);
        
        Flight::create([
            'NR_VOO' => 173,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 395,
            'CD_ARNV' => 'TTOUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 174,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 187,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 174,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 386,
            'CD_ARNV' => 'TTKMU',
        ]);
        
        Flight::create([
            'NR_VOO' => 174,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 406,
            'CD_ARNV' => 'TTTUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 175,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTUMB',
        ]);
        
        Flight::create([
            'NR_VOO' => 175,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 116,
            'CD_ARNV' => 'TTKUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 176,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 227,
            'CD_ARNV' => 'TTOMF',
        ]);
        
        Flight::create([
            'NR_VOO' => 176,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 111,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 176,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 116,
            'CD_ARNV' => 'TTIUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 177,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 27,
            'CD_ARNV' => 'TTDMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 177,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 40,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 177,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 416,
            'CD_ARNV' => 'TTRUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 177,
            'DT_SAIDA_VOO' => '1993-01-08',
            'NR_ROTA_VOO' => 30,
            'CD_ARNV' => 'TTKCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 178,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 178,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 377,
            'CD_ARNV' => 'TTOMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 178,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 326,
            'CD_ARNV' => 'TTTUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 179,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 26,
            'CD_ARNV' => 'TTRUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 179,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 18,
            'CD_ARNV' => 'TTOMF',
        ]);
        
        Flight::create([
            'NR_VOO' => 180,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 136,
            'CD_ARNV' => 'TTKUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 180,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 266,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 180,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 388,
            'CD_ARNV' => 'TTOMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 181,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 236,
            'CD_ARNV' => 'TTRUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 181,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 98,
            'CD_ARNV' => 'TTLMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 182,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 46,
            'CD_ARNV' => 'TTKUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 182,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 329,
            'CD_ARNV' => 'TTLMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 183,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 46,
            'CD_ARNV' => 'TTKUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 183,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 329,
            'CD_ARNV' => 'TTKMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 184,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 346,
            'CD_ARNV' => 'TTSUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 184,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 139,
            'CD_ARNV' => 'TTIMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 185,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 185,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 246,
            'CD_ARNV' => 'TTRUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 185,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 179,
            'CD_ARNV' => 'TTDMI',
        ]);
        
        Flight::create([
            'NR_VOO' => 186,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 356,
            'CD_ARNV' => 'TTKUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 186,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 306,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 186,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 89,
            'CD_ARNV' => 'TTLMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 187,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 156,
            'CD_ARNV' => 'TTKUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 187,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTKMO',
        ]);
        
        Flight::create([
            'NR_VOO' => 188,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 156,
            'CD_ARNV' => 'TTKUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 188,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 400,
            'CD_ARNV' => 'TTULI',
        ]);
        
        Flight::create([
            'NR_VOO' => 189,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 210,
            'CD_ARNV' => 'TTRLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 189,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 56,
            'CD_ARNV' => 'TTGUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 190,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 210,
            'CD_ARNV' => 'TTILD',
        ]);
        
        Flight::create([
            'NR_VOO' => 190,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 166,
            'CD_ARNV' => 'TTIUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 191,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 176,
            'CD_ARNV' => 'TTKUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 191,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 10,
            'CD_ARNV' => 'TTILS',
        ]);
        
        Flight::create([
            'NR_VOO' => 192,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 120,
            'CD_ARNV' => 'TTKLV',
        ]);
        
        Flight::create([
            'NR_VOO' => 192,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 76,
            'CD_ARNV' => 'TTKUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 193,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 186,
            'CD_ARNV' => 'TTKUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 193,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 30,
            'CD_ARNV' => 'TTOLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 194,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 330,
            'CD_ARNV' => 'TTKLT',
        ]);
        
        Flight::create([
            'NR_VOO' => 194,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 194,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 86,
            'CD_ARNV' => 'TTKUQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 195,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 396,
            'CD_ARNV' => 'TTKUC',
        ]);
        
        Flight::create([
            'NR_VOO' => 195,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 50,
            'CD_ARNV' => 'TTILM',
        ]);
        
        Flight::create([
            'NR_VOO' => 196,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 337,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 196,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 150,
            'CD_ARNV' => 'TTSLY',
        ]);
        
        Flight::create([
            'NR_VOO' => 196,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 396,
            'CD_ARNV' => 'TTRUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 197,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 46,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 197,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 307,
            'CD_ARNV' => 'TTKUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 197,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 60,
            'CD_ARNV' => 'TTILS',
        ]);
        
        Flight::create([
            'NR_VOO' => 198,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 260,
            'CD_ARNV' => 'TTKLL',
        ]);
        
        Flight::create([
            'NR_VOO' => 198,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 207,
            'CD_ARNV' => 'TTKUG',
        ]);
        
        Flight::create([
            'NR_VOO' => 199,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 7,
            'CD_ARNV' => 'TTTUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 199,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 260,
            'CD_ARNV' => 'TTKLM',
        ]);
        
        Flight::create([
            'NR_VOO' => 200,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 270,
            'CD_ARNV' => 'TTKLP',
        ]);
        
        Flight::create([
            'NR_VOO' => 200,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 199,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 200,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTKUG',
        ]);
        
        Flight::create([
            'NR_VOO' => 201,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 380,
            'CD_ARNV' => 'TTKLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 201,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 37,
            'CD_ARNV' => 'TTOUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 202,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 180,
            'CD_ARNV' => 'TTKLU',
        ]);
        
        Flight::create([
            'NR_VOO' => 202,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 47,
            'CD_ARNV' => 'TTKUC',
        ]);
        
        Flight::create([
            'NR_VOO' => 203,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTHON',
        ]);
        
        Flight::create([
            'NR_VOO' => 203,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 47,
            'CD_ARNV' => 'TTSUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 203,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 90,
            'CD_ARNV' => 'TTLLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 204,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 413,
            'CD_ARNV' => 'TTKDW',
        ]);
        
        Flight::create([
            'NR_VOO' => 204,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 190,
            'CD_ARNV' => 'TTKLM',
        ]);
        
        Flight::create([
            'NR_VOO' => 204,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 347,
            'CD_ARNV' => 'TTSUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 205,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 57,
            'CD_ARNV' => 'TTSUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 205,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 205,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 421,
            'CD_ARNV' => 'TTRLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 205,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTUNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 206,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 277,
            'CD_ARNV' => 'TTOUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 206,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTILM',
        ]);
        
        Flight::create([
            'NR_VOO' => 207,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 207,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 121,
            'CD_ARNV' => 'TTKLH',
        ]);
        
        Flight::create([
            'NR_VOO' => 207,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 277,
            'CD_ARNV' => 'TTQUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 208,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTTOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 208,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTKLT',
        ]);
        
        Flight::create([
            'NR_VOO' => 208,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 97,
            'CD_ARNV' => 'TTKUF',
        ]);
        
        Flight::create([
            'NR_VOO' => 209,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 31,
            'CD_ARNV' => 'TTOLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 209,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 297,
            'CD_ARNV' => 'TTTUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 210,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 208,
            'CD_ARNV' => 'TTKUC',
        ]);
        
        Flight::create([
            'NR_VOO' => 210,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 31,
            'CD_ARNV' => 'TTILS',
        ]);
        
        Flight::create([
            'NR_VOO' => 211,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 218,
            'CD_ARNV' => 'TTKUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 211,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 231,
            'CD_ARNV' => 'TTILD',
        ]);
        
        Flight::create([
            'NR_VOO' => 212,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 418,
            'CD_ARNV' => 'TTKUZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 212,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 161,
            'CD_ARNV' => 'TTILB',
        ]);
        
        Flight::create([
            'NR_VOO' => 213,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 218,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 213,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 238,
            'CD_ARNV' => 'TTLUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 213,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 229,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 213,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 271,
            'CD_ARNV' => 'TTOLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 214,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 338,
            'CD_ARNV' => 'TTKUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 214,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 371,
            'CD_ARNV' => 'TTKLD',
        ]);
        
        Flight::create([
            'NR_VOO' => 215,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 215,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 391,
            'CD_ARNV' => 'TTRLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 215,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 138,
            'CD_ARNV' => 'TTSUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 216,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 2,
            'CD_ARNV' => 'TTKLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 216,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 38,
            'CD_ARNV' => 'TTIUM',
        ]);
        
        Flight::create([
            'NR_VOO' => 217,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 202,
            'CD_ARNV' => 'TTKLP',
        ]);
        
        Flight::create([
            'NR_VOO' => 217,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 248,
            'CD_ARNV' => 'TTKUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 218,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 202,
            'CD_ARNV' => 'TTKLT',
        ]);
        
        Flight::create([
            'NR_VOO' => 218,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 248,
            'CD_ARNV' => 'TTKUL',
        ]);
        
        Flight::create([
            'NR_VOO' => 219,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 302,
            'CD_ARNV' => 'TTKLV',
        ]);
        
        Flight::create([
            'NR_VOO' => 219,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 172,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 219,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 248,
            'CD_ARNV' => 'TTQUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 220,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 158,
            'CD_ARNV' => 'TTKUC',
        ]);
        
        Flight::create([
            'NR_VOO' => 220,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 212,
            'CD_ARNV' => 'TTILT',
        ]);
        
        Flight::create([
            'NR_VOO' => 221,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 158,
            'CD_ARNV' => 'TTKUF',
        ]);
        
        Flight::create([
            'NR_VOO' => 221,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 221,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 212,
            'CD_ARNV' => 'TTILT',
        ]);
        
        Flight::create([
            'NR_VOO' => 222,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 312,
            'CD_ARNV' => 'TTKLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 222,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 368,
            'CD_ARNV' => 'TTKUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 223,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 312,
            'CD_ARNV' => 'TTKLL',
        ]);
        
        Flight::create([
            'NR_VOO' => 223,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 368,
            'CD_ARNV' => 'TTKUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 224,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 422,
            'CD_ARNV' => 'TTOLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 224,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 372,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 224,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 178,
            'CD_ARNV' => 'TTKUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 225,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 398,
            'CD_ARNV' => 'TTRUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 225,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 22,
            'CD_ARNV' => 'TTILB',
        ]);
        
        Flight::create([
            'NR_VOO' => 226,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 309,
            'CD_ARNV' => 'TTSUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 226,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 122,
            'CD_ARNV' => 'TTKLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 227,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 222,
            'CD_ARNV' => 'TTKLV',
        ]);
        
        Flight::create([
            'NR_VOO' => 227,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 129,
            'CD_ARNV' => 'TTKUN',
        ]);
        
        Flight::create([
            'NR_VOO' => 228,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 339,
            'CD_ARNV' => 'TTKUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 228,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 132,
            'CD_ARNV' => 'TTILM',
        ]);
        
        Flight::create([
            'NR_VOO' => 229,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 39,
            'CD_ARNV' => 'TTGUI',
        ]);
        
        Flight::create([
            'NR_VOO' => 229,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 236,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 229,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 152,
            'CD_ARNV' => 'TTKLC',
        ]);
        
        Flight::create([
            'NR_VOO' => 230,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 52,
            'CD_ARNV' => 'TTKLV',
        ]);
        
        Flight::create([
            'NR_VOO' => 230,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 339,
            'CD_ARNV' => 'TTOUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 231,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 231,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 149,
            'CD_ARNV' => 'TTOUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 231,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 262,
            'CD_ARNV' => 'TTRLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 232,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 262,
            'CD_ARNV' => 'TTRLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 232,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 269,
            'CD_ARNV' => 'TTGUS',
        ]);
        
        Flight::create([
            'NR_VOO' => 233,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 189,
            'CD_ARNV' => 'TTKUD',
        ]);
        
        Flight::create([
            'NR_VOO' => 233,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 362,
            'CD_ARNV' => 'TTKLD',
        ]);
        
        Flight::create([
            'NR_VOO' => 234,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 234,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 372,
            'CD_ARNV' => 'TTOLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 234,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 199,
            'CD_ARNV' => 'TTTUR',
        ]);
        
        Flight::create([
            'NR_VOO' => 235,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 72,
            'CD_ARNV' => 'TTKLQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 235,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 416,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 235,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 10,
            'CD_ARNV' => 'TTKTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 236,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 10,
            'CD_ARNV' => 'TTKTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 236,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 103,
            'CD_ARNV' => 'TTILB',
        ]);
        
        Flight::create([
            'NR_VOO' => 237,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 103,
            'CD_ARNV' => 'TTILB',
        ]);
        
        Flight::create([
            'NR_VOO' => 237,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 110,
            'CD_ARNV' => 'TTKTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 238,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 413,
            'CD_ARNV' => 'TTKLL',
        ]);
        
        Flight::create([
            'NR_VOO' => 238,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 320,
            'CD_ARNV' => 'TTITT',
        ]);
        
        Flight::create([
            'NR_VOO' => 238,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 239,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 213,
            'CD_ARNV' => 'TTKLH',
        ]);
        
        Flight::create([
            'NR_VOO' => 239,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 40,
            'CD_ARNV' => 'TTKTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 240,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 143,
            'CD_ARNV' => 'TTKLP',
        ]);
        
        Flight::create([
            'NR_VOO' => 240,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 250,
            'CD_ARNV' => 'TTSTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 241,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 253,
            'CD_ARNV' => 'TTRLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 241,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 150,
            'CD_ARNV' => 'TTITT',
        ]);
        
        Flight::create([
            'NR_VOO' => 242,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTLLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 242,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 250,
            'CD_ARNV' => 'TTRTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 243,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 270,
            'CD_ARNV' => 'TTITO',
        ]);
        
        Flight::create([
            'NR_VOO' => 243,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 263,
            'CD_ARNV' => 'TTKLM',
        ]);
        
        Flight::create([
            'NR_VOO' => 244,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 244,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 73,
            'CD_ARNV' => 'TTILB',
        ]);
        
        Flight::create([
            'NR_VOO' => 244,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 90,
            'CD_ARNV' => 'TTKTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 245,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 260,
            'CD_ARNV' => 'TTINV',
        ]);
        
        Flight::create([
            'NR_VOO' => 245,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 290,
            'CD_ARNV' => 'TTITO',
        ]);
        
        Flight::create([
            'NR_VOO' => 245,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 373,
            'CD_ARNV' => 'TTKLS',
        ]);
        
        Flight::create([
            'NR_VOO' => 246,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 297,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 246,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 390,
            'CD_ARNV' => 'TTPTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 246,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 393,
            'CD_ARNV' => 'TTKLC',
        ]);
        
        Flight::create([
            'NR_VOO' => 247,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 114,
            'CD_ARNV' => 'TTKLP',
        ]);
        
        Flight::create([
            'NR_VOO' => 247,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 401,
            'CD_ARNV' => 'TTKTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 247,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 350,
            'CD_ARNV' => 'TTINO',
        ]);
        
        Flight::create([
            'NR_VOO' => 248,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 114,
            'CD_ARNV' => 'TTKLT',
        ]);
        
        Flight::create([
            'NR_VOO' => 249,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 121,
            'CD_ARNV' => 'TTKTF',
        ]);
        
        Flight::create([
            'NR_VOO' => 249,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 124,
            'CD_ARNV' => 'TTOLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 250,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 224,
            'CD_ARNV' => 'TTKLS',
        ]);
        
        Flight::create([
            'NR_VOO' => 251,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 224,
            'CD_ARNV' => 'TTKLU',
        ]);
        
        Flight::create([
            'NR_VOO' => 251,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 71,
            'CD_ARNV' => 'TTRTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 252,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 81,
            'CD_ARNV' => 'TTLTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 252,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 395,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 252,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTILL',
        ]);
        
        Flight::create([
            'NR_VOO' => 253,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 334,
            'CD_ARNV' => 'TTILM',
        ]);
        
        Flight::create([
            'NR_VOO' => 253,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 91,
            'CD_ARNV' => 'TTRTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 254,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 134,
            'CD_ARNV' => 'TTLLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 254,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 254,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 402,
            'CD_ARNV' => 'TTKTF',
        ]);
        
        Flight::create([
            'NR_VOO' => 255,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 302,
            'CD_ARNV' => 'TTKTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 255,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 334,
            'CD_ARNV' => 'TTKLB',
        ]);
        
        Flight::create([
            'NR_VOO' => 256,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 102,
            'CD_ARNV' => 'TTKTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 256,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTSLY',
        ]);
        
        Flight::create([
            'NR_VOO' => 257,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 44,
            'CD_ARNV' => 'TTRLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 257,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 112,
            'CD_ARNV' => 'TTKTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 258,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 244,
            'CD_ARNV' => 'TTKLQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 258,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 32,
            'CD_ARNV' => 'TTLTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 258,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 254,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 259,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTKLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 260,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 260,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 332,
            'CD_ARNV' => 'TTITT',
        ]);
        
        Flight::create([
            'NR_VOO' => 260,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTKLM',
        ]);
        
        Flight::create([
            'NR_VOO' => 261,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 364,
            'CD_ARNV' => 'TTILV',
        ]);
        
        Flight::create([
            'NR_VOO' => 261,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 262,
            'CD_ARNV' => 'TTNTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 262,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 72,
            'CD_ARNV' => 'TTKTF',
        ]);
        
        Flight::create([
            'NR_VOO' => 262,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 262,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 364,
            'CD_ARNV' => 'TTKLB',
        ]);
        
        Flight::create([
            'NR_VOO' => 263,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 392,
            'CD_ARNV' => 'TTPTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 263,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 284,
            'CD_ARNV' => 'TTILL',
        ]);
        
        Flight::create([
            'NR_VOO' => 264,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 387,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 264,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 203,
            'CD_ARNV' => 'TTKTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 264,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTKLC',
        ]);
        
        Flight::create([
            'NR_VOO' => 265,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 94,
            'CD_ARNV' => 'TTILS',
        ]);
        
        Flight::create([
            'NR_VOO' => 265,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 403,
            'CD_ARNV' => 'TTKTT',
        ]);
        
        Flight::create([
            'NR_VOO' => 266,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 105,
            'CD_ARNV' => 'TTILT',
        ]);
        
        Flight::create([
            'NR_VOO' => 266,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 350,
            'CD_ARNV' => 'TTONT',
        ]);
        
        Flight::create([
            'NR_VOO' => 266,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 3,
            'CD_ARNV' => 'TTOTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 267,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 303,
            'CD_ARNV' => 'TTRTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 267,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 205,
            'CD_ARNV' => 'TTILL',
        ]);
        
        Flight::create([
            'NR_VOO' => 268,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 113,
            'CD_ARNV' => 'TTLTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 268,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 305,
            'CD_ARNV' => 'TTKLC',
        ]);
        
        Flight::create([
            'NR_VOO' => 269,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 405,
            'CD_ARNV' => 'TTKLU',
        ]);
        
        Flight::create([
            'NR_VOO' => 269,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 213,
            'CD_ARNV' => 'TTTTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 270,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTKTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 270,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 415,
            'CD_ARNV' => 'TTSLY',
        ]);
        
        Flight::create([
            'NR_VOO' => 270,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 271,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 135,
            'CD_ARNV' => 'TTKLD',
        ]);
        
        Flight::create([
            'NR_VOO' => 271,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 33,
            'CD_ARNV' => 'TTRTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 272,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 43,
            'CD_ARNV' => 'TTKTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 272,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 344,
            'CD_ARNV' => 'TTTOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 272,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 335,
            'CD_ARNV' => 'TTKLM',
        ]);
        
        Flight::create([
            'NR_VOO' => 273,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 243,
            'CD_ARNV' => 'TTOTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 273,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 275,
            'CD_ARNV' => 'TTRLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 274,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 175,
            'CD_ARNV' => 'TTKLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 274,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 153,
            'CD_ARNV' => 'TTRTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 275,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 153,
            'CD_ARNV' => 'TTRTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 275,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTULI',
        ]);
        
        Flight::create([
            'NR_VOO' => 276,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTKTF',
        ]);
        
        Flight::create([
            'NR_VOO' => 276,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 406,
            'CD_ARNV' => 'TTILL',
        ]);
        
        Flight::create([
            'NR_VOO' => 277,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 277,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 293,
            'CD_ARNV' => 'TTPTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 277,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 406,
            'CD_ARNV' => 'TTILL',
        ]);
        
        Flight::create([
            'NR_VOO' => 278,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTKLH',
        ]);
        
        Flight::create([
            'NR_VOO' => 278,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 393,
            'CD_ARNV' => 'TTOTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 279,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 26,
            'CD_ARNV' => 'TTKLH',
        ]);
        
        Flight::create([
            'NR_VOO' => 279,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 104,
            'CD_ARNV' => 'TTSTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 280,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 214,
            'CD_ARNV' => 'TTNTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 280,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 36,
            'CD_ARNV' => 'TTKLD',
        ]);
        
        Flight::create([
            'NR_VOO' => 281,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 136,
            'CD_ARNV' => 'TTKLV',
        ]);
        
        Flight::create([
            'NR_VOO' => 281,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 124,
            'CD_ARNV' => 'TTNTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 282,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 244,
            'CD_ARNV' => 'TTKTF',
        ]);
        
        Flight::create([
            'NR_VOO' => 282,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 6,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 282,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTILV',
        ]);
        
        Flight::create([
            'NR_VOO' => 283,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 44,
            'CD_ARNV' => 'TTLTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 283,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 283,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 346,
            'CD_ARNV' => 'TTILS',
        ]);
        
        Flight::create([
            'NR_VOO' => 284,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 356,
            'CD_ARNV' => 'TTKLB',
        ]);
        
        Flight::create([
            'NR_VOO' => 284,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 144,
            'CD_ARNV' => 'TTNTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 285,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 254,
            'CD_ARNV' => 'TTTTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 285,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 266,
            'CD_ARNV' => 'TTSLY',
        ]);
        
        Flight::create([
            'NR_VOO' => 286,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 164,
            'CD_ARNV' => 'TTWTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 286,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 252,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 286,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 276,
            'CD_ARNV' => 'TTKLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 287,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 264,
            'CD_ARNV' => 'TTWTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 287,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 53,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 287,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 286,
            'CD_ARNV' => 'TTULI',
        ]);
        
        Flight::create([
            'NR_VOO' => 288,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 364,
            'CD_ARNV' => 'TTNTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 288,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 396,
            'CD_ARNV' => 'TTKLH',
        ]);
        
        Flight::create([
            'NR_VOO' => 289,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 64,
            'CD_ARNV' => 'TTNTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 289,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 107,
            'CD_ARNV' => 'TTOLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 290,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 164,
            'CD_ARNV' => 'TTITO',
        ]);
        
        Flight::create([
            'NR_VOO' => 290,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 307,
            'CD_ARNV' => 'TTKLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 291,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTNTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 291,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 7,
            'CD_ARNV' => 'TTKLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 292,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 174,
            'CD_ARNV' => 'TTITO',
        ]);
        
        Flight::create([
            'NR_VOO' => 292,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 417,
            'CD_ARNV' => 'TTOLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 293,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 259,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 293,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 374,
            'CD_ARNV' => 'TTTTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 293,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTLLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 294,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 74,
            'CD_ARNV' => 'TTRTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 294,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 127,
            'CD_ARNV' => 'TTKLS',
        ]);
        
        Flight::create([
            'NR_VOO' => 295,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 295,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 374,
            'CD_ARNV' => 'TTRTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 295,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 127,
            'CD_ARNV' => 'TTKLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 296,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 296,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTKTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 296,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 257,
            'CD_ARNV' => 'TTKLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 297,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTKTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 297,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 157,
            'CD_ARNV' => 'TTKLU',
        ]);
        
        Flight::create([
            'NR_VOO' => 298,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 87,
            'CD_ARNV' => 'TTOLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 298,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 305,
            'CD_ARNV' => 'TTKTT',
        ]);
        
        Flight::create([
            'NR_VOO' => 299,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 299,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 215,
            'CD_ARNV' => 'TTLTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 299,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 187,
            'CD_ARNV' => 'TTULI',
        ]);
        
        Flight::create([
            'NR_VOO' => 300,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 187,
            'CD_ARNV' => 'TTKLP',
        ]);
        
        Flight::create([
            'NR_VOO' => 300,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 15,
            'CD_ARNV' => 'TTITT',
        ]);
        
        Flight::create([
            'NR_VOO' => 301,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 397,
            'CD_ARNV' => 'TTILD',
        ]);
        
        Flight::create([
            'NR_VOO' => 302,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 345,
            'CD_ARNV' => 'TTKTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 302,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 297,
            'CD_ARNV' => 'TTILD',
        ]);
        
        Flight::create([
            'NR_VOO' => 303,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 145,
            'CD_ARNV' => 'TTNTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 303,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 175,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 303,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 197,
            'CD_ARNV' => 'TTKLT',
        ]);
        
        Flight::create([
            'NR_VOO' => 304,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 355,
            'CD_ARNV' => 'TTLTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 304,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 118,
            'CD_ARNV' => 'TTILV',
        ]);
        
        Flight::create([
            'NR_VOO' => 305,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 340,
            'CD_ARNV' => 'TTKNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 305,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 185,
            'CD_ARNV' => 'TTLTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 305,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 118,
            'CD_ARNV' => 'TTILV',
        ]);
        
        Flight::create([
            'NR_VOO' => 306,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 185,
            'CD_ARNV' => 'TTKTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 306,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 118,
            'CD_ARNV' => 'TTKLB',
        ]);
        
        Flight::create([
            'NR_VOO' => 307,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 268,
            'CD_ARNV' => 'TTUFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 307,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTKLU',
        ]);
        
        Flight::create([
            'NR_VOO' => 307,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 395,
            'CD_ARNV' => 'TTRTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 308,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 6,
            'CD_ARNV' => 'TTWTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 308,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 308,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 18,
            'CD_ARNV' => 'TTKLL',
        ]);
        
        Flight::create([
            'NR_VOO' => 309,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 306,
            'CD_ARNV' => 'TTKTR',
        ]);
        
        Flight::create([
            'NR_VOO' => 309,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 328,
            'CD_ARNV' => 'TTILT',
        ]);
        
        Flight::create([
            'NR_VOO' => 310,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTITO',
        ]);
        
        Flight::create([
            'NR_VOO' => 310,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 238,
            'CD_ARNV' => 'TTRLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 311,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 326,
            'CD_ARNV' => 'TTTTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 311,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 38,
            'CD_ARNV' => 'TTOLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 312,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 26,
            'CD_ARNV' => 'TTRTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 312,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTKLF',
        ]);
        
        Flight::create([
            'NR_VOO' => 313,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 136,
            'CD_ARNV' => 'TTLTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 313,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 313,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 268,
            'CD_ARNV' => 'TTSLY',
        ]);
        
        Flight::create([
            'NR_VOO' => 314,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 136,
            'CD_ARNV' => 'TTKTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 314,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 278,
            'CD_ARNV' => 'TTILV',
        ]);
        
        Flight::create([
            'NR_VOO' => 315,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 246,
            'CD_ARNV' => 'TTNTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 315,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 178,
            'CD_ARNV' => 'TTILM',
        ]);
        
        Flight::create([
            'NR_VOO' => 316,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTKLC',
        ]);
        
        Flight::create([
            'NR_VOO' => 316,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 66,
            'CD_ARNV' => 'TTKTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 317,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 266,
            'CD_ARNV' => 'TTITT',
        ]);
        
        Flight::create([
            'NR_VOO' => 317,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 188,
            'CD_ARNV' => 'TTILT',
        ]);
        
        Flight::create([
            'NR_VOO' => 318,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 66,
            'CD_ARNV' => 'TTPTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 318,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTKLD',
        ]);
        
        Flight::create([
            'NR_VOO' => 319,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 398,
            'CD_ARNV' => 'TTKLQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 319,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 67,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 319,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 376,
            'CD_ARNV' => 'TTKTT',
        ]);
        
        Flight::create([
            'NR_VOO' => 320,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 17,
            'CD_ARNV' => 'TTNTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 320,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 419,
            'CD_ARNV' => 'TTKLL',
        ]);
        
        Flight::create([
            'NR_VOO' => 321,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 417,
            'CD_ARNV' => 'TTRTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 321,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 355,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 321,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 19,
            'CD_ARNV' => 'TTKLO',
        ]);
        
        Flight::create([
            'NR_VOO' => 322,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTWTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 322,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 29,
            'CD_ARNV' => 'TTKLQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 323,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 227,
            'CD_ARNV' => 'TTKTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 323,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTKLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 324,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 324,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 127,
            'CD_ARNV' => 'TTOTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 324,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 369,
            'CD_ARNV' => 'TTKLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 325,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 325,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 369,
            'CD_ARNV' => 'TTKLQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 325,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 347,
            'CD_ARNV' => 'TTRTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 326,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 167,
            'CD_ARNV' => 'TTRTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 326,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 179,
            'CD_ARNV' => 'TTRLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 327,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 377,
            'CD_ARNV' => 'TTLTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 327,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 124,
            'CD_ARNV' => 'TTKOC',
        ]);
        
        Flight::create([
            'NR_VOO' => 327,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 279,
            'CD_ARNV' => 'TTILD',
        ]);
        
        Flight::create([
            'NR_VOO' => 328,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 20,
            'CD_ARNV' => 'TTUDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 328,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 379,
            'CD_ARNV' => 'TTKLB',
        ]);
        
        Flight::create([
            'NR_VOO' => 328,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 287,
            'CD_ARNV' => 'TTRTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 329,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 179,
            'CD_ARNV' => 'TTLLI',
        ]);
        
        Flight::create([
            'NR_VOO' => 329,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 287,
            'CD_ARNV' => 'TTRTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 330,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 330,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 189,
            'CD_ARNV' => 'TTKLS',
        ]);
        
        Flight::create([
            'NR_VOO' => 330,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 97,
            'CD_ARNV' => 'TTKTR',
        ]);
        
        Flight::create([
            'NR_VOO' => 331,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 189,
            'CD_ARNV' => 'TTKLS',
        ]);
        
        Flight::create([
            'NR_VOO' => 331,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 297,
            'CD_ARNV' => 'TTRTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 332,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 142,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 332,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 121,
            'CD_ARNV' => 'TTKKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 332,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 308,
            'CD_ARNV' => 'TTNTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 333,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 202,
            'CD_ARNV' => 'TTKKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 333,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 285,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 333,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 218,
            'CD_ARNV' => 'TTKTR',
        ]);
        
        Flight::create([
            'NR_VOO' => 334,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 222,
            'CD_ARNV' => 'TTKKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 334,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 128,
            'CD_ARNV' => 'TTNTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 335,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 224,
            'CD_ARNV' => 'TTOKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 335,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 38,
            'CD_ARNV' => 'TTSTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 336,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 22,
            'CD_ARNV' => 'TTKDW',
        ]);
        
        Flight::create([
            'NR_VOO' => 336,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 385,
            'CD_ARNV' => 'TTKKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 336,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 248,
            'CD_ARNV' => 'TTKTR',
        ]);
        
        Flight::create([
            'NR_VOO' => 337,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 258,
            'CD_ARNV' => 'TTKTT',
        ]);
        
        Flight::create([
            'NR_VOO' => 337,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 66,
            'CD_ARNV' => 'TTOKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 338,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 57,
            'CD_ARNV' => 'TTOKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 338,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 178,
            'CD_ARNV' => 'TTTTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 339,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 278,
            'CD_ARNV' => 'TTRTU',
        ]);
        
        Flight::create([
            'NR_VOO' => 339,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 197,
            'CD_ARNV' => 'TTOKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 340,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 209,
            'CD_ARNV' => 'TTOKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 340,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 298,
            'CD_ARNV' => 'TTSTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 341,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 229,
            'CD_ARNV' => 'TTKKU',
        ]);
        
        Flight::create([
            'NR_VOO' => 341,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 298,
            'CD_ARNV' => 'TTTTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 342,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 329,
            'CD_ARNV' => 'TTTTO',
        ]);
        
        Flight::create([
            'NR_VOO' => 342,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 91,
            'CD_ARNV' => 'TTKJO',
        ]);
        
        Flight::create([
            'NR_VOO' => 343,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 39,
            'CD_ARNV' => 'TTKTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 343,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTKJO',
        ]);
        
        Flight::create([
            'NR_VOO' => 344,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 374,
            'CD_ARNV' => 'TTKJO',
        ]);
        
        Flight::create([
            'NR_VOO' => 344,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 239,
            'CD_ARNV' => 'TTKTT',
        ]);
        
        Flight::create([
            'NR_VOO' => 345,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 417,
            'CD_ARNV' => 'TTKJO',
        ]);
        
        Flight::create([
            'NR_VOO' => 345,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 339,
            'CD_ARNV' => 'TTRTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 346,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 259,
            'CD_ARNV' => 'TTKTR',
        ]);
        
        Flight::create([
            'NR_VOO' => 346,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 19,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 346,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 49,
            'CD_ARNV' => 'TTKJO',
        ]);
        
        Flight::create([
            'NR_VOO' => 347,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 200,
            'CD_ARNV' => 'TTKIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 347,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 7,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 347,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 369,
            'CD_ARNV' => 'TTPTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 348,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 200,
            'CD_ARNV' => 'TTKIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 348,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 269,
            'CD_ARNV' => 'TTOTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 349,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 300,
            'CD_ARNV' => 'TTKIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 349,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 269,
            'CD_ARNV' => 'TTRTH',
        ]);
        
        Flight::create([
            'NR_VOO' => 350,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTLTI',
        ]);
        
        Flight::create([
            'NR_VOO' => 350,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 300,
            'CD_ARNV' => 'TTKIX',
        ]);
        
        Flight::create([
            'NR_VOO' => 350,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 330,
            'CD_ARNV' => 'TTKNR',
        ]);
        
        Flight::create([
            'NR_VOO' => 351,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 310,
            'CD_ARNV' => 'TTKSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 351,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 100,
            'CD_ARNV' => 'TTPIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 352,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 210,
            'CD_ARNV' => 'TTLIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 352,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 10,
            'CD_ARNV' => 'TTKSL',
        ]);
        
        Flight::create([
            'NR_VOO' => 353,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 410,
            'CD_ARNV' => 'TTKID',
        ]);
        
        Flight::create([
            'NR_VOO' => 354,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 20,
            'CD_ARNV' => 'TTKSN',
        ]);
        
        Flight::create([
            'NR_VOO' => 354,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 110,
            'CD_ARNV' => 'TTDIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 355,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 420,
            'CD_ARNV' => 'TTRIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 355,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 119,
            'CD_ARNV' => 'TTODO',
        ]);
        
        Flight::create([
            'NR_VOO' => 355,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 30,
            'CD_ARNV' => 'TTKSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 356,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 420,
            'CD_ARNV' => 'TTLIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 356,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 240,
            'CD_ARNV' => 'TTISB',
        ]);
        
        Flight::create([
            'NR_VOO' => 356,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 357,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 150,
            'CD_ARNV' => 'TTKSN',
        ]);
        
        Flight::create([
            'NR_VOO' => 357,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 20,
            'CD_ARNV' => 'TTLIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 358,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 50,
            'CD_ARNV' => 'TTNSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 358,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTKIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 359,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 130,
            'CD_ARNV' => 'TTVIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 359,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 143,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 359,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 50,
            'CD_ARNV' => 'TTIST',
        ]);
        
        Flight::create([
            'NR_VOO' => 360,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 230,
            'CD_ARNV' => 'TTMIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 360,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 224,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 360,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 250,
            'CD_ARNV' => 'TTOSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 361,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 70,
            'CD_ARNV' => 'TTDSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 361,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 130,
            'CD_ARNV' => 'TTTIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 362,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 330,
            'CD_ARNV' => 'TTUIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 362,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 180,
            'CD_ARNV' => 'TTKSB',
        ]);
        
        Flight::create([
            'NR_VOO' => 363,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 190,
            'CD_ARNV' => 'TTKSR',
        ]);
        
        Flight::create([
            'NR_VOO' => 363,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 40,
            'CD_ARNV' => 'TTNIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 364,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 40,
            'CD_ARNV' => 'TTNIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 364,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 90,
            'CD_ARNV' => 'TTKSR',
        ]);
        
        Flight::create([
            'NR_VOO' => 365,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 40,
            'CD_ARNV' => 'TTSIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 365,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 301,
            'CD_ARNV' => 'TTKSC',
        ]);
        
        Flight::create([
            'NR_VOO' => 366,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 319,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 366,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 350,
            'CD_ARNV' => 'TTMIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 366,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 101,
            'CD_ARNV' => 'TTISB',
        ]);
        
        Flight::create([
            'NR_VOO' => 367,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 101,
            'CD_ARNV' => 'TTIST',
        ]);
        
        Flight::create([
            'NR_VOO' => 367,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 250,
            'CD_ARNV' => 'TTKIJ',
        ]);
        
        Flight::create([
            'NR_VOO' => 368,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 31,
            'CD_ARNV' => 'TTKSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 368,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 307,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 368,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 60,
            'CD_ARNV' => 'TTNIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 369,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 160,
            'CD_ARNV' => 'TTRIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 369,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 331,
            'CD_ARNV' => 'TTKST',
        ]);
        
        Flight::create([
            'NR_VOO' => 370,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 351,
            'CD_ARNV' => 'TTKSV',
        ]);
        
        Flight::create([
            'NR_VOO' => 370,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTKIJ',
        ]);
        
        Flight::create([
            'NR_VOO' => 371,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 351,
            'CD_ARNV' => 'TTSSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 371,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 260,
            'CD_ARNV' => 'TTSIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 372,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 361,
            'CD_ARNV' => 'TTKSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 372,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 170,
            'CD_ARNV' => 'TTVIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 373,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 373,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 271,
            'CD_ARNV' => 'TTKSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 373,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 170,
            'CD_ARNV' => 'TTVIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 374,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 70,
            'CD_ARNV' => 'TTRIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 374,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 371,
            'CD_ARNV' => 'TTISI',
        ]);
        
        Flight::create([
            'NR_VOO' => 375,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 70,
            'CD_ARNV' => 'TTKIY',
        ]);
        
        Flight::create([
            'NR_VOO' => 375,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 181,
            'CD_ARNV' => 'TTISI',
        ]);
        
        Flight::create([
            'NR_VOO' => 376,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 66,
            'CD_ARNV' => 'TTUCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 376,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 376,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 180,
            'CD_ARNV' => 'TTNIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 376,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 391,
            'CD_ARNV' => 'TTKSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 377,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 80,
            'CD_ARNV' => 'TTRIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 377,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 91,
            'CD_ARNV' => 'TTKSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 378,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 380,
            'CD_ARNV' => 'TTKIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 378,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 378,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 91,
            'CD_ARNV' => 'TTOST',
        ]);
        
        Flight::create([
            'NR_VOO' => 379,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 202,
            'CD_ARNV' => 'TTKSW',
        ]);
        
        Flight::create([
            'NR_VOO' => 379,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 380,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 102,
            'CD_ARNV' => 'TTKSN',
        ]);
        
        Flight::create([
            'NR_VOO' => 380,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 1,
            'CD_ARNV' => 'TTRIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 381,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 112,
            'CD_ARNV' => 'TTKST',
        ]);
        
        Flight::create([
            'NR_VOO' => 381,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 382,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 112,
            'CD_ARNV' => 'TTLSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 382,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 382,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 1,
            'CD_ARNV' => 'TTOIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 383,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 401,
            'CD_ARNV' => 'TTTIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 383,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 132,
            'CD_ARNV' => 'TTNSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 384,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTRIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 384,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 132,
            'CD_ARNV' => 'TTOST',
        ]);
        
        Flight::create([
            'NR_VOO' => 385,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 11,
            'CD_ARNV' => 'TTOIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 385,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 342,
            'CD_ARNV' => 'TTUSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 386,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 311,
            'CD_ARNV' => 'TTTIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 386,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 342,
            'CD_ARNV' => 'TTOSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 386,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 387,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 311,
            'CD_ARNV' => 'TTDIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 387,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 142,
            'CD_ARNV' => 'TTOST',
        ]);
        
        Flight::create([
            'NR_VOO' => 388,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 111,
            'CD_ARNV' => 'TTSIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 388,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 252,
            'CD_ARNV' => 'TTISI',
        ]);
        
        Flight::create([
            'NR_VOO' => 389,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 421,
            'CD_ARNV' => 'TTKIY',
        ]);
        
        Flight::create([
            'NR_VOO' => 389,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 262,
            'CD_ARNV' => 'TTKSL',
        ]);
        
        Flight::create([
            'NR_VOO' => 390,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 121,
            'CD_ARNV' => 'TTPIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 390,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 262,
            'CD_ARNV' => 'TTKSV',
        ]);
        
        Flight::create([
            'NR_VOO' => 391,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 391,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 272,
            'CD_ARNV' => 'TTISO',
        ]);
        
        Flight::create([
            'NR_VOO' => 391,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 131,
            'CD_ARNV' => 'TTDIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 392,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 31,
            'CD_ARNV' => 'TTKIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 392,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 92,
            'CD_ARNV' => 'TTIST',
        ]);
        
        Flight::create([
            'NR_VOO' => 393,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 92,
            'CD_ARNV' => 'TTISI',
        ]);
        
        Flight::create([
            'NR_VOO' => 393,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 231,
            'CD_ARNV' => 'TTKIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 394,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 203,
            'CD_ARNV' => 'TTKSN',
        ]);
        
        Flight::create([
            'NR_VOO' => 394,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 56,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 394,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 141,
            'CD_ARNV' => 'TTLIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 395,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 141,
            'CD_ARNV' => 'TTMIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 395,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 403,
            'CD_ARNV' => 'TTDSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 396,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 303,
            'CD_ARNV' => 'TTSSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 396,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 241,
            'CD_ARNV' => 'TTMIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 397,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 341,
            'CD_ARNV' => 'TTKIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 398,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 41,
            'CD_ARNV' => 'TTPIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 398,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 223,
            'CD_ARNV' => 'TTRSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 399,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTISI',
        ]);
        
        Flight::create([
            'NR_VOO' => 399,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 151,
            'CD_ARNV' => 'TTRIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 400,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 51,
            'CD_ARNV' => 'TTRIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 400,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 324,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 400,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 343,
            'CD_ARNV' => 'TTOSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 401,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 151,
            'CD_ARNV' => 'TTKIU',
        ]);
        
        Flight::create([
            'NR_VOO' => 401,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 263,
            'CD_ARNV' => 'TTKSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 402,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 263,
            'CD_ARNV' => 'TTDSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 402,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 251,
            'CD_ARNV' => 'TTKIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 403,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 403,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 61,
            'CD_ARNV' => 'TTVID',
        ]);
        
        Flight::create([
            'NR_VOO' => 404,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 361,
            'CD_ARNV' => 'TTVIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 404,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTIST',
        ]);
        
        Flight::create([
            'NR_VOO' => 405,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 261,
            'CD_ARNV' => 'TTLIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 405,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 93,
            'CD_ARNV' => 'TTRSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 406,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 193,
            'CD_ARNV' => 'TTOSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 406,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 161,
            'CD_ARNV' => 'TTKIU',
        ]);
        
        Flight::create([
            'NR_VOO' => 407,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 304,
            'CD_ARNV' => 'TTKSV',
        ]);
        
        Flight::create([
            'NR_VOO' => 407,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 171,
            'CD_ARNV' => 'TTVIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 408,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 171,
            'CD_ARNV' => 'TTVIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 408,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 104,
            'CD_ARNV' => 'TTOST',
        ]);
        
        Flight::create([
            'NR_VOO' => 409,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 234,
            'CD_ARNV' => 'TTKSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 409,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 71,
            'CD_ARNV' => 'TTLIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 410,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 271,
            'CD_ARNV' => 'TTDIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 410,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 334,
            'CD_ARNV' => 'TTKST',
        ]);
        
        Flight::create([
            'NR_VOO' => 411,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 371,
            'CD_ARNV' => 'TTDIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 411,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 334,
            'CD_ARNV' => 'TTNSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 412,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 291,
            'CD_ARNV' => 'TTGIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 412,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 344,
            'CD_ARNV' => 'TTKSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 413,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 413,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 364,
            'CD_ARNV' => 'TTUSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 413,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 291,
            'CD_ARNV' => 'TTKID',
        ]);
        
        Flight::create([
            'NR_VOO' => 414,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 384,
            'CD_ARNV' => 'TTKSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 414,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 2,
            'CD_ARNV' => 'TTRIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 415,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 402,
            'CD_ARNV' => 'TTDIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 415,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 394,
            'CD_ARNV' => 'TTRSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 416,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 105,
            'CD_ARNV' => 'TTKSL',
        ]);
        
        Flight::create([
            'NR_VOO' => 416,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 115,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 416,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 212,
            'CD_ARNV' => 'TTDIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 417,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 112,
            'CD_ARNV' => 'TTVIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 417,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 305,
            'CD_ARNV' => 'TTLSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 418,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 315,
            'CD_ARNV' => 'TTKSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 418,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 212,
            'CD_ARNV' => 'TTNIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 419,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 412,
            'CD_ARNV' => 'TTLIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 419,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 315,
            'CD_ARNV' => 'TTOSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 419,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 24,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 420,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 422,
            'CD_ARNV' => 'TTRIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 420,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 415,
            'CD_ARNV' => 'TTOSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 421,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 22,
            'CD_ARNV' => 'TTRIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 421,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 225,
            'CD_ARNV' => 'TTKSR',
        ]);
        
        Flight::create([
            'NR_VOO' => 422,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 422,
            'CD_ARNV' => 'TTNIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 422,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 25,
            'CD_ARNV' => 'TTOSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 423,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 22,
            'CD_ARNV' => 'TTLIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 423,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTOSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 424,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 355,
            'CD_ARNV' => 'TTKSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 425,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTKSV',
        ]);
        
        Flight::create([
            'NR_VOO' => 426,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 165,
            'CD_ARNV' => 'TTKSB',
        ]);
        
        Flight::create([
            'NR_VOO' => 426,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 132,
            'CD_ARNV' => 'TTLIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 427,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 332,
            'CD_ARNV' => 'TTKIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 427,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTLSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 428,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 28,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 428,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 75,
            'CD_ARNV' => 'TTOSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 428,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 342,
            'CD_ARNV' => 'TTKIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 429,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 152,
            'CD_ARNV' => 'TTKIJ',
        ]);
        
        Flight::create([
            'NR_VOO' => 429,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 395,
            'CD_ARNV' => 'TTRSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 430,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 295,
            'CD_ARNV' => 'TTOSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 431,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 206,
            'CD_ARNV' => 'TTRSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 431,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 362,
            'CD_ARNV' => 'TTDIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 432,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTKSW',
        ]);
        
        Flight::create([
            'NR_VOO' => 432,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 432,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 372,
            'CD_ARNV' => 'TTRIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 432,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 14,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 433,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 172,
            'CD_ARNV' => 'TTKIU',
        ]);
        
        Flight::create([
            'NR_VOO' => 433,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTKSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 434,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 372,
            'CD_ARNV' => 'TTKIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 434,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 316,
            'CD_ARNV' => 'TTKST',
        ]);
        
        Flight::create([
            'NR_VOO' => 435,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 126,
            'CD_ARNV' => 'TTKSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 435,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 382,
            'CD_ARNV' => 'TTKIX',
        ]);
        
        Flight::create([
            'NR_VOO' => 436,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 13,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 436,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 126,
            'CD_ARNV' => 'TTKSL',
        ]);
        
        Flight::create([
            'NR_VOO' => 436,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 82,
            'CD_ARNV' => 'TTDIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 437,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 226,
            'CD_ARNV' => 'TTKSB',
        ]);
        
        Flight::create([
            'NR_VOO' => 437,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTOIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 438,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 14,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 438,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 56,
            'CD_ARNV' => 'TTISO',
        ]);
        
        Flight::create([
            'NR_VOO' => 438,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 103,
            'CD_ARNV' => 'TTDIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 439,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 56,
            'CD_ARNV' => 'TTISO',
        ]);
        
        Flight::create([
            'NR_VOO' => 439,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 103,
            'CD_ARNV' => 'TTNIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 440,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 203,
            'CD_ARNV' => 'TTLIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 440,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 166,
            'CD_ARNV' => 'TTRSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 441,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 303,
            'CD_ARNV' => 'TTRIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 441,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 166,
            'CD_ARNV' => 'TTOSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 442,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 266,
            'CD_ARNV' => 'TTISO',
        ]);
        
        Flight::create([
            'NR_VOO' => 442,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 303,
            'CD_ARNV' => 'TTSIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 443,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 176,
            'CD_ARNV' => 'TTDSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 443,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 313,
            'CD_ARNV' => 'TTVID',
        ]);
        
        Flight::create([
            'NR_VOO' => 444,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 376,
            'CD_ARNV' => 'TTLSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 444,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 223,
            'CD_ARNV' => 'TTLIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 445,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTLSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 445,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 223,
            'CD_ARNV' => 'TTKIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 446,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTLFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 446,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 196,
            'CD_ARNV' => 'TTUST',
        ]);
        
        Flight::create([
            'NR_VOO' => 446,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 223,
            'CD_ARNV' => 'TTKIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 447,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTDIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 447,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 7,
            'CD_ARNV' => 'TTSSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 448,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTLIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 448,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 207,
            'CD_ARNV' => 'TTOSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 449,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 417,
            'CD_ARNV' => 'TTUST',
        ]);
        
        Flight::create([
            'NR_VOO' => 449,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 133,
            'CD_ARNV' => 'TTRIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 450,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 227,
            'CD_ARNV' => 'TTKSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 450,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 33,
            'CD_ARNV' => 'TTUIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 451,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 337,
            'CD_ARNV' => 'TTDSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 451,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 233,
            'CD_ARNV' => 'TTKIJ',
        ]);
        
        Flight::create([
            'NR_VOO' => 452,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 37,
            'CD_ARNV' => 'TTKSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 453,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 137,
            'CD_ARNV' => 'TTUSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 453,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 133,
            'CD_ARNV' => 'TTDIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 454,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 147,
            'CD_ARNV' => 'TTKSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 454,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 243,
            'CD_ARNV' => 'TTRIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 455,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 147,
            'CD_ARNV' => 'TTRSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 455,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 343,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 455,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 243,
            'CD_ARNV' => 'TTRIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 456,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 247,
            'CD_ARNV' => 'TTOSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 456,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 243,
            'CD_ARNV' => 'TTUIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 457,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 253,
            'CD_ARNV' => 'TTFIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 457,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 367,
            'CD_ARNV' => 'TTRSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 458,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 300,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 458,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 253,
            'CD_ARNV' => 'TTLIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 458,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 167,
            'CD_ARNV' => 'TTSSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 459,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 387,
            'CD_ARNV' => 'TTKSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 459,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 153,
            'CD_ARNV' => 'TTRIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 460,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 253,
            'CD_ARNV' => 'TTKIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 460,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 460,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 97,
            'CD_ARNV' => 'TTOSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 461,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 8,
            'CD_ARNV' => 'TTKST',
        ]);
        
        Flight::create([
            'NR_VOO' => 461,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 153,
            'CD_ARNV' => 'TTSIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 462,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 291,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 462,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 373,
            'CD_ARNV' => 'TTRIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 462,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTRSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 463,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 414,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 463,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 73,
            'CD_ARNV' => 'TTKIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 463,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTISB',
        ]);
        
        Flight::create([
            'NR_VOO' => 464,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTKSC',
        ]);
        
        Flight::create([
            'NR_VOO' => 464,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTDIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 465,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 228,
            'CD_ARNV' => 'TTKSW',
        ]);
        
        Flight::create([
            'NR_VOO' => 465,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTDIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 466,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTRIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 466,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 328,
            'CD_ARNV' => 'TTKSB',
        ]);
        
        Flight::create([
            'NR_VOO' => 467,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 293,
            'CD_ARNV' => 'TTNIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 467,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 138,
            'CD_ARNV' => 'TTKSC',
        ]);
        
        Flight::create([
            'NR_VOO' => 468,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 138,
            'CD_ARNV' => 'TTKSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 468,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 93,
            'CD_ARNV' => 'TTUIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 469,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 4,
            'CD_ARNV' => 'TTRIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 469,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 38,
            'CD_ARNV' => 'TTOST',
        ]);
        
        Flight::create([
            'NR_VOO' => 470,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 304,
            'CD_ARNV' => 'TTRIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 470,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 148,
            'CD_ARNV' => 'TTLSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 471,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 304,
            'CD_ARNV' => 'TTDIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 471,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 258,
            'CD_ARNV' => 'TTIST',
        ]);
        
        Flight::create([
            'NR_VOO' => 471,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 313,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 472,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 204,
            'CD_ARNV' => 'TTGIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 472,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 268,
            'CD_ARNV' => 'TTKSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 473,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 268,
            'CD_ARNV' => 'TTISO',
        ]);
        
        Flight::create([
            'NR_VOO' => 473,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 104,
            'CD_ARNV' => 'TTRIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 474,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 404,
            'CD_ARNV' => 'TTRIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 474,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 178,
            'CD_ARNV' => 'TTNSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 475,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 288,
            'CD_ARNV' => 'TTKSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 476,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 414,
            'CD_ARNV' => 'TTLIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 476,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 476,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 188,
            'CD_ARNV' => 'TTKSV',
        ]);
        
        Flight::create([
            'NR_VOO' => 477,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 14,
            'CD_ARNV' => 'TTTIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 477,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 298,
            'CD_ARNV' => 'TTNSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 478,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 24,
            'CD_ARNV' => 'TTKIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 478,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 198,
            'CD_ARNV' => 'TTISB',
        ]);
        
        Flight::create([
            'NR_VOO' => 479,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 324,
            'CD_ARNV' => 'TTKIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 479,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 298,
            'CD_ARNV' => 'TTOSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 480,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 409,
            'CD_ARNV' => 'TTKSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 480,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 134,
            'CD_ARNV' => 'TTMIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 481,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 409,
            'CD_ARNV' => 'TTOSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 482,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 44,
            'CD_ARNV' => 'TTRIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 482,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 119,
            'CD_ARNV' => 'TTKSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 483,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 219,
            'CD_ARNV' => 'TTKSL',
        ]);
        
        Flight::create([
            'NR_VOO' => 483,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 344,
            'CD_ARNV' => 'TTMIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 484,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 219,
            'CD_ARNV' => 'TTKSB',
        ]);
        
        Flight::create([
            'NR_VOO' => 485,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 44,
            'CD_ARNV' => 'TTKIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 485,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 319,
            'CD_ARNV' => 'TTKSR',
        ]);
        
        Flight::create([
            'NR_VOO' => 486,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 254,
            'CD_ARNV' => 'TTDIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 486,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 229,
            'CD_ARNV' => 'TTKSW',
        ]);
        
        Flight::create([
            'NR_VOO' => 487,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 139,
            'CD_ARNV' => 'TTKSC',
        ]);
        
        Flight::create([
            'NR_VOO' => 487,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTRIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 488,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 254,
            'CD_ARNV' => 'TTLIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 488,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 391,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 488,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 149,
            'CD_ARNV' => 'TTLSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 489,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTRIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 490,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 149,
            'CD_ARNV' => 'TTOSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 491,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 64,
            'CD_ARNV' => 'TTVID',
        ]);
        
        Flight::create([
            'NR_VOO' => 491,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 249,
            'CD_ARNV' => 'TTISB',
        ]);
        
        Flight::create([
            'NR_VOO' => 492,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 149,
            'CD_ARNV' => 'TTUST',
        ]);
        
        Flight::create([
            'NR_VOO' => 492,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 364,
            'CD_ARNV' => 'TTLIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 493,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 259,
            'CD_ARNV' => 'TTKSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 493,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 493,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 64,
            'CD_ARNV' => 'TTTIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 494,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 264,
            'CD_ARNV' => 'TTKIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 494,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTLSO',
        ]);
        
        Flight::create([
            'NR_VOO' => 495,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 259,
            'CD_ARNV' => 'TTUST',
        ]);
        
        Flight::create([
            'NR_VOO' => 496,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 74,
            'CD_ARNV' => 'TTKIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 496,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 169,
            'CD_ARNV' => 'TTKSW',
        ]);
        
        Flight::create([
            'NR_VOO' => 497,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 174,
            'CD_ARNV' => 'TTDIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 497,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 169,
            'CD_ARNV' => 'TTOSM',
        ]);
        
        Flight::create([
            'NR_VOO' => 498,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 284,
            'CD_ARNV' => 'TTFIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 498,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 269,
            'CD_ARNV' => 'TTUSI',
        ]);
        
        Flight::create([
            'NR_VOO' => 499,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 279,
            'CD_ARNV' => 'TTOSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 499,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 284,
            'CD_ARNV' => 'TTTIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 500,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTUIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 500,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 189,
            'CD_ARNV' => 'TTKSN',
        ]);
        
        Flight::create([
            'NR_VOO' => 501,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 384,
            'CD_ARNV' => 'TTKIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 501,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 389,
            'CD_ARNV' => 'TTRSS',
        ]);
        
        Flight::create([
            'NR_VOO' => 502,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 94,
            'CD_ARNV' => 'TTNIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 502,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 199,
            'CD_ARNV' => 'TTOSU',
        ]);
        
        Flight::create([
            'NR_VOO' => 503,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 200,
            'CD_ARNV' => 'TTIRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 503,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 394,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 503,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 94,
            'CD_ARNV' => 'TTMIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 504,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 316,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 504,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 294,
            'CD_ARNV' => 'TTKIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 505,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 505,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 294,
            'CD_ARNV' => 'TTKIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 505,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 310,
            'CD_ARNV' => 'TTRRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 506,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 320,
            'CD_ARNV' => 'TTORN',
        ]);
        
        Flight::create([
            'NR_VOO' => 506,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 394,
            'CD_ARNV' => 'TTKIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 507,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTSIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 507,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 20,
            'CD_ARNV' => 'TTIRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 508,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 105,
            'CD_ARNV' => 'TTFIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 508,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 30,
            'CD_ARNV' => 'TTKRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 509,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTVIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 509,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 230,
            'CD_ARNV' => 'TTNRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 509,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 510,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 330,
            'CD_ARNV' => 'TTIRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 510,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 315,
            'CD_ARNV' => 'TTDIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 511,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 215,
            'CD_ARNV' => 'TTMIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 511,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 55,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 511,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTIRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 512,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 89,
            'CD_ARNV' => 'TTLFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 512,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 150,
            'CD_ARNV' => 'TTORI',
        ]);
        
        Flight::create([
            'NR_VOO' => 512,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 15,
            'CD_ARNV' => 'TTLIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 513,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 415,
            'CD_ARNV' => 'TTKIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 513,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTURI',
        ]);
        
        Flight::create([
            'NR_VOO' => 514,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTRIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 514,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 170,
            'CD_ARNV' => 'TTKRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 515,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 80,
            'CD_ARNV' => 'TTRRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 515,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTLIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 516,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 516,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 25,
            'CD_ARNV' => 'TTRIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 516,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 280,
            'CD_ARNV' => 'TTRRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 517,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 201,
            'CD_ARNV' => 'TTKRB',
        ]);
        
        Flight::create([
            'NR_VOO' => 517,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 25,
            'CD_ARNV' => 'TTDIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 517,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 518,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 101,
            'CD_ARNV' => 'TTIRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 518,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTSIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 519,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 201,
            'CD_ARNV' => 'TTKRN',
        ]);
        
        Flight::create([
            'NR_VOO' => 519,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 135,
            'CD_ARNV' => 'TTVIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 520,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 301,
            'CD_ARNV' => 'TTKRR',
        ]);
        
        Flight::create([
            'NR_VOO' => 520,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 235,
            'CD_ARNV' => 'TTLIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 521,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 111,
            'CD_ARNV' => 'TTKRN',
        ]);
        
        Flight::create([
            'NR_VOO' => 521,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 521,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTKIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 522,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 311,
            'CD_ARNV' => 'TTKRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 522,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 235,
            'CD_ARNV' => 'TTKIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 523,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 421,
            'CD_ARNV' => 'TTDRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 523,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 135,
            'CD_ARNV' => 'TTDIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 524,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 145,
            'CD_ARNV' => 'TTRIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 524,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTRRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 525,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 155,
            'CD_ARNV' => 'TTRIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 525,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 525,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 321,
            'CD_ARNV' => 'TTURV',
        ]);
        
        Flight::create([
            'NR_VOO' => 526,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 355,
            'CD_ARNV' => 'TTNIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 526,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 331,
            'CD_ARNV' => 'TTORD',
        ]);
        
        Flight::create([
            'NR_VOO' => 527,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 255,
            'CD_ARNV' => 'TTOIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 527,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 131,
            'CD_ARNV' => 'TTTRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 528,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 398,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 528,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 255,
            'CD_ARNV' => 'TTOIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 528,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 231,
            'CD_ARNV' => 'TTKRQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 529,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 155,
            'CD_ARNV' => 'TTKIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 529,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 41,
            'CD_ARNV' => 'TTDRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 529,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 145,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 529,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 77,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 530,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 41,
            'CD_ARNV' => 'TTKRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 530,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTGIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 531,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 65,
            'CD_ARNV' => 'TTLIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 531,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 341,
            'CD_ARNV' => 'TTKRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 532,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 65,
            'CD_ARNV' => 'TTRIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 532,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 261,
            'CD_ARNV' => 'TTDRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 533,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTOIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 533,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 304,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 533,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 61,
            'CD_ARNV' => 'TTORT',
        ]);
        
        Flight::create([
            'NR_VOO' => 534,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 65,
            'CD_ARNV' => 'TTOIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 534,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 161,
            'CD_ARNV' => 'TTKRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 535,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 65,
            'CD_ARNV' => 'TTTIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 535,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 261,
            'CD_ARNV' => 'TTKRR',
        ]);
        
        Flight::create([
            'NR_VOO' => 536,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTNRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 536,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 275,
            'CD_ARNV' => 'TTFIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 537,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 75,
            'CD_ARNV' => 'TTVIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 537,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTKRS',
        ]);
        
        Flight::create([
            'NR_VOO' => 538,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 175,
            'CD_ARNV' => 'TTNIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 538,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTKRG',
        ]);
        
        Flight::create([
            'NR_VOO' => 539,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 175,
            'CD_ARNV' => 'TTLIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 539,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 322,
            'CD_ARNV' => 'TTORD',
        ]);
        
        Flight::create([
            'NR_VOO' => 540,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 375,
            'CD_ARNV' => 'TTKIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 540,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 322,
            'CD_ARNV' => 'TTURI',
        ]);
        
        Flight::create([
            'NR_VOO' => 541,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 375,
            'CD_ARNV' => 'TTKIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 541,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 122,
            'CD_ARNV' => 'TTKRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 542,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 85,
            'CD_ARNV' => 'TTRIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 542,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 32,
            'CD_ARNV' => 'TTKRS',
        ]);
        
        Flight::create([
            'NR_VOO' => 543,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 385,
            'CD_ARNV' => 'TTDIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 543,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 242,
            'CD_ARNV' => 'TTORN',
        ]);
        
        Flight::create([
            'NR_VOO' => 544,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 42,
            'CD_ARNV' => 'TTKRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 545,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 42,
            'CD_ARNV' => 'TTKRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 545,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 285,
            'CD_ARNV' => 'TTRIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 546,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 85,
            'CD_ARNV' => 'TTOIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 546,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 152,
            'CD_ARNV' => 'TTORI',
        ]);
        
        Flight::create([
            'NR_VOO' => 547,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 52,
            'CD_ARNV' => 'TTKRN',
        ]);
        
        Flight::create([
            'NR_VOO' => 547,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 547,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 385,
            'CD_ARNV' => 'TTUIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 548,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 548,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 272,
            'CD_ARNV' => 'TTORN',
        ]);
        
        Flight::create([
            'NR_VOO' => 548,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 385,
            'CD_ARNV' => 'TTUIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 549,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 172,
            'CD_ARNV' => 'TTIRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 549,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 549,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 85,
            'CD_ARNV' => 'TTKIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 550,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTLIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 550,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 182,
            'CD_ARNV' => 'TTORG',
        ]);
        
        Flight::create([
            'NR_VOO' => 551,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 383,
            'CD_ARNV' => 'TTHON',
        ]);
        
        Flight::create([
            'NR_VOO' => 551,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTSIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 551,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 382,
            'CD_ARNV' => 'TTORI',
        ]);
        
        Flight::create([
            'NR_VOO' => 552,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 206,
            'CD_ARNV' => 'TTRIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 552,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 157,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 552,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 382,
            'CD_ARNV' => 'TTORG',
        ]);
        
        Flight::create([
            'NR_VOO' => 553,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 6,
            'CD_ARNV' => 'TTKIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 553,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 553,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 282,
            'CD_ARNV' => 'TTKRM',
        ]);
        
        Flight::create([
            'NR_VOO' => 553,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 554,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 6,
            'CD_ARNV' => 'TTKIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 554,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 92,
            'CD_ARNV' => 'TTORD',
        ]);
        
        Flight::create([
            'NR_VOO' => 555,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTKIY',
        ]);
        
        Flight::create([
            'NR_VOO' => 555,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTKRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 556,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 406,
            'CD_ARNV' => 'TTKID',
        ]);
        
        Flight::create([
            'NR_VOO' => 556,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 3,
            'CD_ARNV' => 'TTORD',
        ]);
        
        Flight::create([
            'NR_VOO' => 557,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 116,
            'CD_ARNV' => 'TTGIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 557,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 3,
            'CD_ARNV' => 'TTORG',
        ]);
        
        Flight::create([
            'NR_VOO' => 558,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 13,
            'CD_ARNV' => 'TTKRN',
        ]);
        
        Flight::create([
            'NR_VOO' => 558,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 416,
            'CD_ARNV' => 'TTRIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 559,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 13,
            'CD_ARNV' => 'TTKRQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 559,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 416,
            'CD_ARNV' => 'TTUIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 560,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 126,
            'CD_ARNV' => 'TTDIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 560,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTURI',
        ]);
        
        Flight::create([
            'NR_VOO' => 561,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 126,
            'CD_ARNV' => 'TTTIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 561,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTKRG',
        ]);
        
        Flight::create([
            'NR_VOO' => 561,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 368,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 562,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTKRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 562,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 326,
            'CD_ARNV' => 'TTKIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 563,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 336,
            'CD_ARNV' => 'TTLIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 563,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 133,
            'CD_ARNV' => 'TTKRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 564,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTKRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 564,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 564,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 336,
            'CD_ARNV' => 'TTKIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 565,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 336,
            'CD_ARNV' => 'TTKIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 565,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTIRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 566,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTOCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 566,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 73,
            'CD_ARNV' => 'TTKRV',
        ]);
        
        Flight::create([
            'NR_VOO' => 566,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 36,
            'CD_ARNV' => 'TTKID',
        ]);
        
        Flight::create([
            'NR_VOO' => 567,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 73,
            'CD_ARNV' => 'TTKRV',
        ]);
        
        Flight::create([
            'NR_VOO' => 567,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 346,
            'CD_ARNV' => 'TTRIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 568,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 383,
            'CD_ARNV' => 'TTDRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 568,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 346,
            'CD_ARNV' => 'TTDIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 569,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 46,
            'CD_ARNV' => 'TTTIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 569,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTKRG',
        ]);
        
        Flight::create([
            'NR_VOO' => 570,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 193,
            'CD_ARNV' => 'TTRRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 570,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 196,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 570,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTLIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 571,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 246,
            'CD_ARNV' => 'TTDIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 571,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 93,
            'CD_ARNV' => 'TTORG',
        ]);
        
        Flight::create([
            'NR_VOO' => 572,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 304,
            'CD_ARNV' => 'TTKRD',
        ]);
        
        Flight::create([
            'NR_VOO' => 572,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 572,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 156,
            'CD_ARNV' => 'TTVIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 573,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 356,
            'CD_ARNV' => 'TTKIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 573,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 14,
            'CD_ARNV' => 'TTIRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 574,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 356,
            'CD_ARNV' => 'TTDIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 574,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTIRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 575,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 324,
            'CD_ARNV' => 'TTIRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 575,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 156,
            'CD_ARNV' => 'TTSIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 576,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 324,
            'CD_ARNV' => 'TTIRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 576,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 66,
            'CD_ARNV' => 'TTVIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 577,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 124,
            'CD_ARNV' => 'TTKRM',
        ]);
        
        Flight::create([
            'NR_VOO' => 577,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 366,
            'CD_ARNV' => 'TTLIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 578,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 366,
            'CD_ARNV' => 'TTRIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 578,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 234,
            'CD_ARNV' => 'TTRRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 579,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 579,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 176,
            'CD_ARNV' => 'TTTIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 579,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 92,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 579,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTORI',
        ]);
        
        Flight::create([
            'NR_VOO' => 580,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 580,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 176,
            'CD_ARNV' => 'TTTIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 580,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 234,
            'CD_ARNV' => 'TTURV',
        ]);
        
        Flight::create([
            'NR_VOO' => 581,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 44,
            'CD_ARNV' => 'TTNRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 581,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 581,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 276,
            'CD_ARNV' => 'TTUIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 582,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 174,
            'CD_ARNV' => 'TTIRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 582,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 276,
            'CD_ARNV' => 'TTKIX',
        ]);
        
        Flight::create([
            'NR_VOO' => 583,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTIRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 583,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 583,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 386,
            'CD_ARNV' => 'TTDIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 584,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 337,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 584,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 158,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 584,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTIRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 584,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 386,
            'CD_ARNV' => 'TTLIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 585,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 186,
            'CD_ARNV' => 'TTRIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 585,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 384,
            'CD_ARNV' => 'TTKRR',
        ]);
        
        Flight::create([
            'NR_VOO' => 586,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 171,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 586,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 405,
            'CD_ARNV' => 'TTDRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 586,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 86,
            'CD_ARNV' => 'TTSIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 586,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 587,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTKRB',
        ]);
        
        Flight::create([
            'NR_VOO' => 587,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTUIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 587,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 169,
            'CD_ARNV' => 'TTFON',
        ]);
        
        Flight::create([
            'NR_VOO' => 588,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 196,
            'CD_ARNV' => 'TTKIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 588,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 305,
            'CD_ARNV' => 'TTIRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 589,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 589,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 115,
            'CD_ARNV' => 'TTORT',
        ]);
        
        Flight::create([
            'NR_VOO' => 589,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 396,
            'CD_ARNV' => 'TTKIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 590,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 590,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 15,
            'CD_ARNV' => 'TTORI',
        ]);
        
        Flight::create([
            'NR_VOO' => 591,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 207,
            'CD_ARNV' => 'TTMIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 591,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 235,
            'CD_ARNV' => 'TTORN',
        ]);
        
        Flight::create([
            'NR_VOO' => 592,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 207,
            'CD_ARNV' => 'TTLIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 593,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 345,
            'CD_ARNV' => 'TTKRB',
        ]);
        
        Flight::create([
            'NR_VOO' => 593,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 258,
            'CD_ARNV' => 'TTODO',
        ]);
        
        Flight::create([
            'NR_VOO' => 593,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 407,
            'CD_ARNV' => 'TTUIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 594,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTKRB',
        ]);
        
        Flight::create([
            'NR_VOO' => 594,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 186,
            'CD_ARNV' => 'TTKOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 594,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 407,
            'CD_ARNV' => 'TTKIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 595,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTKRD',
        ]);
        
        Flight::create([
            'NR_VOO' => 595,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 595,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 107,
            'CD_ARNV' => 'TTKIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 596,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTNIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 596,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 348,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 597,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 17,
            'CD_ARNV' => 'TTTIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 597,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTKRS',
        ]);
        
        Flight::create([
            'NR_VOO' => 598,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 17,
            'CD_ARNV' => 'TTOIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 598,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 55,
            'CD_ARNV' => 'TTKRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 599,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTKRD',
        ]);
        
        Flight::create([
            'NR_VOO' => 599,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 27,
            'CD_ARNV' => 'TTSIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 599,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 600,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 137,
            'CD_ARNV' => 'TTGIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 600,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 165,
            'CD_ARNV' => 'TTKRR',
        ]);
        
        Flight::create([
            'NR_VOO' => 601,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 237,
            'CD_ARNV' => 'TTLIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 601,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 185,
            'CD_ARNV' => 'TTIRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 602,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 375,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 602,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 285,
            'CD_ARNV' => 'TTKRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 603,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 285,
            'CD_ARNV' => 'TTKRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 603,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 137,
            'CD_ARNV' => 'TTLIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 604,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 237,
            'CD_ARNV' => 'TTRIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 605,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 137,
            'CD_ARNV' => 'TTKIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 605,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTORG',
        ]);
        
        Flight::create([
            'NR_VOO' => 606,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 337,
            'CD_ARNV' => 'TTSIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 606,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 607,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 392,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 607,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 47,
            'CD_ARNV' => 'TTNIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 607,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 316,
            'CD_ARNV' => 'TTKRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 608,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 147,
            'CD_ARNV' => 'TTRIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 608,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 116,
            'CD_ARNV' => 'TTURV',
        ]);
        
        Flight::create([
            'NR_VOO' => 609,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 47,
            'CD_ARNV' => 'TTUIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 609,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 226,
            'CD_ARNV' => 'TTDRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 610,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 236,
            'CD_ARNV' => 'TTIRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 610,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 357,
            'CD_ARNV' => 'TTGIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 611,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 611,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 357,
            'CD_ARNV' => 'TTOIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 612,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 266,
            'CD_ARNV' => 'TTORN',
        ]);
        
        Flight::create([
            'NR_VOO' => 612,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 257,
            'CD_ARNV' => 'TTKIU',
        ]);
        
        Flight::create([
            'NR_VOO' => 613,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 367,
            'CD_ARNV' => 'TTLIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 613,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 307,
            'CD_ARNV' => 'TTKRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 614,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 17,
            'CD_ARNV' => 'TTKRB',
        ]);
        
        Flight::create([
            'NR_VOO' => 614,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 367,
            'CD_ARNV' => 'TTRIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 615,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTIRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 615,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 167,
            'CD_ARNV' => 'TTRIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 616,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 17,
            'CD_ARNV' => 'TTKRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 616,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 67,
            'CD_ARNV' => 'TTTIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 617,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 67,
            'CD_ARNV' => 'TTDIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 617,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTKRG',
        ]);
        
        Flight::create([
            'NR_VOO' => 618,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 27,
            'CD_ARNV' => 'TTNRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 618,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 167,
            'CD_ARNV' => 'TTSIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 619,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 375,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 619,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 27,
            'CD_ARNV' => 'TTNRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 619,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTKIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 620,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTKRN',
        ]);
        
        Flight::create([
            'NR_VOO' => 620,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 620,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTKID',
        ]);
        
        Flight::create([
            'NR_VOO' => 621,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 387,
            'CD_ARNV' => 'TTKIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 621,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 37,
            'CD_ARNV' => 'TTURI',
        ]);
        
        Flight::create([
            'NR_VOO' => 622,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 287,
            'CD_ARNV' => 'TTKIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 623,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 247,
            'CD_ARNV' => 'TTKRQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 623,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 197,
            'CD_ARNV' => 'TTTIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 624,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 47,
            'CD_ARNV' => 'TTKRD',
        ]);
        
        Flight::create([
            'NR_VOO' => 624,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 297,
            'CD_ARNV' => 'TTKIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 625,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 257,
            'CD_ARNV' => 'TTKRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 625,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 97,
            'CD_ARNV' => 'TTSIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 626,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 135,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 626,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 257,
            'CD_ARNV' => 'TTKRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 626,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 308,
            'CD_ARNV' => 'TTTIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 627,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 328,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 627,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 367,
            'CD_ARNV' => 'TTIRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 628,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 208,
            'CD_ARNV' => 'TTKIU',
        ]);
        
        Flight::create([
            'NR_VOO' => 628,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 67,
            'CD_ARNV' => 'TTKRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 629,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 418,
            'CD_ARNV' => 'TTRIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 629,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 292,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 630,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 77,
            'CD_ARNV' => 'TTKRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 630,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 18,
            'CD_ARNV' => 'TTRIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 631,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTNIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 631,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 287,
            'CD_ARNV' => 'TTURV',
        ]);
        
        Flight::create([
            'NR_VOO' => 632,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 87,
            'CD_ARNV' => 'TTKRT',
        ]);
        
        Flight::create([
            'NR_VOO' => 632,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 18,
            'CD_ARNV' => 'TTSIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 633,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 97,
            'CD_ARNV' => 'TTDRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 633,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 128,
            'CD_ARNV' => 'TTVID',
        ]);
        
        Flight::create([
            'NR_VOO' => 634,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 308,
            'CD_ARNV' => 'TTDRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 634,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 28,
            'CD_ARNV' => 'TTTIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 635,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 208,
            'CD_ARNV' => 'TTTRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 635,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 228,
            'CD_ARNV' => 'TTSIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 636,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 138,
            'CD_ARNV' => 'TTDIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 636,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 28,
            'CD_ARNV' => 'TTRRO',
        ]);
        
        Flight::create([
            'NR_VOO' => 637,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 228,
            'CD_ARNV' => 'TTKRQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 637,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 138,
            'CD_ARNV' => 'TTRIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 638,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 238,
            'CD_ARNV' => 'TTKIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 638,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 128,
            'CD_ARNV' => 'TTKRQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 639,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 338,
            'CD_ARNV' => 'TTPIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 639,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 38,
            'CD_ARNV' => 'TTRRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 640,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 348,
            'CD_ARNV' => 'TTKIY',
        ]);
        
        Flight::create([
            'NR_VOO' => 640,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 148,
            'CD_ARNV' => 'TTKRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 641,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 237,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 641,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 148,
            'CD_ARNV' => 'TTKIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 641,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 168,
            'CD_ARNV' => 'TTTRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 642,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 48,
            'CD_ARNV' => 'TTKIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 642,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 178,
            'CD_ARNV' => 'TTTRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 643,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 288,
            'CD_ARNV' => 'TTDRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 643,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 348,
            'CD_ARNV' => 'TTDIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 644,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 348,
            'CD_ARNV' => 'TTDIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 644,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 198,
            'CD_ARNV' => 'TTORT',
        ]);
        
        Flight::create([
            'NR_VOO' => 645,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 158,
            'CD_ARNV' => 'TTDIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 645,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 109,
            'CD_ARNV' => 'TTKRV',
        ]);
        
        Flight::create([
            'NR_VOO' => 645,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 345,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 646,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 358,
            'CD_ARNV' => 'TTSIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 646,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 646,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 419,
            'CD_ARNV' => 'TTKRV',
        ]);
        
        Flight::create([
            'NR_VOO' => 647,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 358,
            'CD_ARNV' => 'TTSIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 647,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 119,
            'CD_ARNV' => 'TTKRV',
        ]);
        
        Flight::create([
            'NR_VOO' => 648,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTTIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 648,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 319,
            'CD_ARNV' => 'TTKRG',
        ]);
        
        Flight::create([
            'NR_VOO' => 649,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 168,
            'CD_ARNV' => 'TTUIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 649,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 29,
            'CD_ARNV' => 'TTKRR',
        ]);
        
        Flight::create([
            'NR_VOO' => 650,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 86,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 650,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 168,
            'CD_ARNV' => 'TTKIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 650,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 249,
            'CD_ARNV' => 'TTKRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 651,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 359,
            'CD_ARNV' => 'TTORD',
        ]);
        
        Flight::create([
            'NR_VOO' => 651,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 368,
            'CD_ARNV' => 'TTKIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 652,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 359,
            'CD_ARNV' => 'TTRRU',
        ]);
        
        Flight::create([
            'NR_VOO' => 652,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 278,
            'CD_ARNV' => 'TTUIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 653,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 335,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 653,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 359,
            'CD_ARNV' => 'TTKRS',
        ]);
        
        Flight::create([
            'NR_VOO' => 653,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 378,
            'CD_ARNV' => 'TTUIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 654,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 654,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 359,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 654,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTKIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 654,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTIRC',
        ]);
        
        Flight::create([
            'NR_VOO' => 655,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 278,
            'CD_ARNV' => 'TTKIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 655,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 279,
            'CD_ARNV' => 'TTKRL',
        ]);
        
        Flight::create([
            'NR_VOO' => 656,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 378,
            'CD_ARNV' => 'TTKIX',
        ]);
        
        Flight::create([
            'NR_VOO' => 656,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 179,
            'CD_ARNV' => 'TTKRM',
        ]);
        
        Flight::create([
            'NR_VOO' => 657,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 388,
            'CD_ARNV' => 'TTGIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 658,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 249,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 658,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 288,
            'CD_ARNV' => 'TTMIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 658,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 99,
            'CD_ARNV' => 'TTKRI',
        ]);
        
        Flight::create([
            'NR_VOO' => 659,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 199,
            'CD_ARNV' => 'TTKRM',
        ]);
        
        Flight::create([
            'NR_VOO' => 659,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 98,
            'CD_ARNV' => 'TTRIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 660,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 410,
            'CD_ARNV' => 'TTLQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 660,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 198,
            'CD_ARNV' => 'TTLIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 661,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 160,
            'CD_ARNV' => 'TTLQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 661,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 98,
            'CD_ARNV' => 'TTMIL',
        ]);
        
        Flight::create([
            'NR_VOO' => 662,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 98,
            'CD_ARNV' => 'TTRIM',
        ]);
        
        Flight::create([
            'NR_VOO' => 662,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 91,
            'CD_ARNV' => 'TTKQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 663,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 109,
            'CD_ARNV' => 'TTRIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 663,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 8,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 663,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 152,
            'CD_ARNV' => 'TTKQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 664,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 109,
            'CD_ARNV' => 'TTGIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 664,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 252,
            'CD_ARNV' => 'TTUQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 665,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 272,
            'CD_ARNV' => 'TTUQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 665,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 209,
            'CD_ARNV' => 'TTGIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 666,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 409,
            'CD_ARNV' => 'TTSIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 666,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 292,
            'CD_ARNV' => 'TTOQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 667,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 335,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 667,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 19,
            'CD_ARNV' => 'TTKIX',
        ]);
        
        Flight::create([
            'NR_VOO' => 667,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 103,
            'CD_ARNV' => 'TTIQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 668,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 229,
            'CD_ARNV' => 'TTLIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 668,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 343,
            'CD_ARNV' => 'TTOQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 669,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 29,
            'CD_ARNV' => 'TTMIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 669,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 343,
            'CD_ARNV' => 'TTKQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 670,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 143,
            'CD_ARNV' => 'TTIQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 670,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 139,
            'CD_ARNV' => 'TTTIV',
        ]);
        
        Flight::create([
            'NR_VOO' => 671,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTTON',
        ]);
        
        Flight::create([
            'NR_VOO' => 671,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 39,
            'CD_ARNV' => 'TTKIC',
        ]);
        
        Flight::create([
            'NR_VOO' => 671,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 93,
            'CD_ARNV' => 'TTKQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 672,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 4,
            'CD_ARNV' => 'TTIQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 672,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 239,
            'CD_ARNV' => 'TTKIG',
        ]);
        
        Flight::create([
            'NR_VOO' => 673,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 49,
            'CD_ARNV' => 'TTRIQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 673,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 124,
            'CD_ARNV' => 'TTRQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 674,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 24,
            'CD_ARNV' => 'TTLQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 674,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTGIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 675,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTRIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 675,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 394,
            'CD_ARNV' => 'TTOQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 676,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 359,
            'CD_ARNV' => 'TTKIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 676,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 316,
            'CD_ARNV' => 'TTRQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 677,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 356,
            'CD_ARNV' => 'TTIQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 677,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 43,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 677,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTKIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 678,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTKIB',
        ]);
        
        Flight::create([
            'NR_VOO' => 678,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 166,
            'CD_ARNV' => 'TTUQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 679,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 259,
            'CD_ARNV' => 'TTPIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 679,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 376,
            'CD_ARNV' => 'TTUQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 680,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 680,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 189,
            'CD_ARNV' => 'TTNIZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 680,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 107,
            'CD_ARNV' => 'TTLQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 681,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 681,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 137,
            'CD_ARNV' => 'TTOQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 681,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTKIY',
        ]);
        
        Flight::create([
            'NR_VOO' => 682,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 299,
            'CD_ARNV' => 'TTFIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 682,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 347,
            'CD_ARNV' => 'TTKQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 683,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 238,
            'CD_ARNV' => 'TTRQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 683,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 99,
            'CD_ARNV' => 'TTLIS',
        ]);
        
        Flight::create([
            'NR_VOO' => 684,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 109,
            'CD_ARNV' => 'TTRQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 684,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 299,
            'CD_ARNV' => 'TTMIR',
        ]);
        
        Flight::create([
            'NR_VOO' => 685,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 319,
            'CD_ARNV' => 'TTRQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 685,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 299,
            'CD_ARNV' => 'TTLIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 686,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 99,
            'CD_ARNV' => 'TTKIT',
        ]);
        
        Flight::create([
            'NR_VOO' => 686,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 129,
            'CD_ARNV' => 'TTLQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 687,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 271,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 687,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTOQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 687,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 199,
            'CD_ARNV' => 'TTKIN',
        ]);
        
        Flight::create([
            'NR_VOO' => 688,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 144,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 688,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 169,
            'CD_ARNV' => 'TTIQU',
        ]);
        
        Flight::create([
            'NR_VOO' => 688,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 299,
            'CD_ARNV' => 'TTDIO',
        ]);
        
        Flight::create([
            'NR_VOO' => 689,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 81,
            'CD_ARNV' => 'TTTHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 689,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 340,
            'CD_ARNV' => 'TTMPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 690,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 222,
            'CD_ARNV' => 'TTKHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 690,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 160,
            'CD_ARNV' => 'TTLPR',
        ]);
        
        Flight::create([
            'NR_VOO' => 691,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 42,
            'CD_ARNV' => 'TTLHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 691,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTMPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 692,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 692,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 392,
            'CD_ARNV' => 'TTTHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 692,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 361,
            'CD_ARNV' => 'TTKPI',
        ]);
        
        Flight::create([
            'NR_VOO' => 693,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 43,
            'CD_ARNV' => 'TTTHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 693,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 391,
            'CD_ARNV' => 'TTKPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 693,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 241,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 694,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTTHU',
        ]);
        
        Flight::create([
            'NR_VOO' => 694,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTKPT',
        ]);
        
        Flight::create([
            'NR_VOO' => 695,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 384,
            'CD_ARNV' => 'TTTHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 695,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 242,
            'CD_ARNV' => 'TTKPT',
        ]);
        
        Flight::create([
            'NR_VOO' => 696,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 405,
            'CD_ARNV' => 'TTLHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 696,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 292,
            'CD_ARNV' => 'TTKPT',
        ]);
        
        Flight::create([
            'NR_VOO' => 697,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 697,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 75,
            'CD_ARNV' => 'TTLHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 697,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 233,
            'CD_ARNV' => 'TTMPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 698,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 698,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 85,
            'CD_ARNV' => 'TTNHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 698,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 193,
            'CD_ARNV' => 'TTKPI',
        ]);
        
        Flight::create([
            'NR_VOO' => 699,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 193,
            'CD_ARNV' => 'TTKPI',
        ]);
        
        Flight::create([
            'NR_VOO' => 699,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 206,
            'CD_ARNV' => 'TTTHU',
        ]);
        
        Flight::create([
            'NR_VOO' => 700,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 206,
            'CD_ARNV' => 'TTTHU',
        ]);
        
        Flight::create([
            'NR_VOO' => 700,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 204,
            'CD_ARNV' => 'TTOPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 701,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 306,
            'CD_ARNV' => 'TTKHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 701,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 24,
            'CD_ARNV' => 'TTOPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 702,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 226,
            'CD_ARNV' => 'TTNHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 702,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 344,
            'CD_ARNV' => 'TTLPR',
        ]);
        
        Flight::create([
            'NR_VOO' => 703,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 376,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 703,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 76,
            'CD_ARNV' => 'TTTHU',
        ]);
        
        Flight::create([
            'NR_VOO' => 703,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 225,
            'CD_ARNV' => 'TTKPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 704,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 247,
            'CD_ARNV' => 'TTKHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 704,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 225,
            'CD_ARNV' => 'TTKPI',
        ]);
        
        Flight::create([
            'NR_VOO' => 705,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 57,
            'CD_ARNV' => 'TTNHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 705,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 185,
            'CD_ARNV' => 'TTLPR',
        ]);
        
        Flight::create([
            'NR_VOO' => 706,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 149,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 706,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 77,
            'CD_ARNV' => 'TTLHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 706,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTKPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 707,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 6,
            'CD_ARNV' => 'TTMPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 707,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 358,
            'CD_ARNV' => 'TTKHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 708,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 46,
            'CD_ARNV' => 'TTLPR',
        ]);
        
        Flight::create([
            'NR_VOO' => 708,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 188,
            'CD_ARNV' => 'TTNHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 709,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 139,
            'CD_ARNV' => 'TTLHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 709,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 166,
            'CD_ARNV' => 'TTOPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 710,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 710,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTKHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 710,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 107,
            'CD_ARNV' => 'TTLPR',
        ]);
        
        Flight::create([
            'NR_VOO' => 711,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 147,
            'CD_ARNV' => 'TTOPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 711,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 99,
            'CD_ARNV' => 'TTNHO',
        ]);
        
        Flight::create([
            'NR_VOO' => 712,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 87,
            'CD_ARNV' => 'TTKPT',
        ]);
        
        Flight::create([
            'NR_VOO' => 712,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 400,
            'CD_ARNV' => 'TTKGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 713,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 348,
            'CD_ARNV' => 'TTKPI',
        ]);
        
        Flight::create([
            'NR_VOO' => 713,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 110,
            'CD_ARNV' => 'TTNGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 714,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 10,
            'CD_ARNV' => 'TTRGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 714,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTKPT',
        ]);
        
        Flight::create([
            'NR_VOO' => 715,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 120,
            'CD_ARNV' => 'TTKGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 715,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 119,
            'CD_ARNV' => 'TTOPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 715,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 235,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 716,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 120,
            'CD_ARNV' => 'TTUGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 716,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 329,
            'CD_ARNV' => 'TTKPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 717,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 39,
            'CD_ARNV' => 'TTKPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 717,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 133,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 717,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 340,
            'CD_ARNV' => 'TTNGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 718,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 270,
            'CD_ARNV' => 'TTNGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 718,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 49,
            'CD_ARNV' => 'TTMPO',
        ]);
        
        Flight::create([
            'NR_VOO' => 719,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 400,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 719,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 280,
            'CD_ARNV' => 'TTKGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 720,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 310,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 721,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 320,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 721,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 251,
            'CD_ARNV' => 'TTKGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 722,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 351,
            'CD_ARNV' => 'TTRGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 722,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 20,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 723,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 330,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 723,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 723,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 723,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 271,
            'CD_ARNV' => 'TTKGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 724,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 302,
            'CD_ARNV' => 'TTUGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 724,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 130,
            'CD_ARNV' => 'TTIOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 725,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 240,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 725,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 725,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 142,
            'CD_ARNV' => 'TTKGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 726,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 240,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 726,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 362,
            'CD_ARNV' => 'TTNGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 727,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 72,
            'CD_ARNV' => 'TTKGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 727,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 240,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 728,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 340,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 728,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 403,
            'CD_ARNV' => 'TTKGN',
        ]);
        
        Flight::create([
            'NR_VOO' => 729,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 350,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 729,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 303,
            'CD_ARNV' => 'TTRGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 730,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 143,
            'CD_ARNV' => 'TTKGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 730,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 60,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 731,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 43,
            'CD_ARNV' => 'TTUGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 731,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 134,
            'CD_ARNV' => 'TTKDW',
        ]);
        
        Flight::create([
            'NR_VOO' => 731,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 160,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 732,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTKGN',
        ]);
        
        Flight::create([
            'NR_VOO' => 732,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 260,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 733,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 293,
            'CD_ARNV' => 'TTIGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 733,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 370,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 734,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 4,
            'CD_ARNV' => 'TTKGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 734,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 370,
            'CD_ARNV' => 'TTKOC',
        ]);
        
        Flight::create([
            'NR_VOO' => 735,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 214,
            'CD_ARNV' => 'TTNGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 735,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 370,
            'CD_ARNV' => 'TTIOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 736,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 244,
            'CD_ARNV' => 'TTIGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 736,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 280,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 737,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 174,
            'CD_ARNV' => 'TTKGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 737,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 234,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 737,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 80,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 738,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 80,
            'CD_ARNV' => 'TTKOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 738,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 205,
            'CD_ARNV' => 'TTKGN',
        ]);
        
        Flight::create([
            'NR_VOO' => 739,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 290,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 739,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTIOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 739,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 25,
            'CD_ARNV' => 'TTIGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 740,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 145,
            'CD_ARNV' => 'TTKGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 740,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 190,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 741,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 155,
            'CD_ARNV' => 'TTNGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 741,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 190,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 742,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 249,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 742,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 190,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 742,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 165,
            'CD_ARNV' => 'TTKGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 743,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 743,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 390,
            'CD_ARNV' => 'TTHON',
        ]);
        
        Flight::create([
            'NR_VOO' => 743,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 316,
            'CD_ARNV' => 'TTNGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 744,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 201,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 744,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 744,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 326,
            'CD_ARNV' => 'TTKGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 745,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 1,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 745,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 36,
            'CD_ARNV' => 'TTKGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 746,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 411,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 746,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 746,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 36,
            'CD_ARNV' => 'TTNGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 747,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 11,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 747,
            'DT_SAIDA_VOO' => '1993-01-13',
            'NR_ROTA_VOO' => 346,
            'CD_ARNV' => 'TTUGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 748,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 156,
            'CD_ARNV' => 'TTUGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 748,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 749,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 111,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 749,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 366,
            'CD_ARNV' => 'TTKGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 750,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 286,
            'CD_ARNV' => 'TTKGN',
        ]);
        
        Flight::create([
            'NR_VOO' => 751,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 111,
            'CD_ARNV' => 'TTKOC',
        ]);
        
        Flight::create([
            'NR_VOO' => 751,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 196,
            'CD_ARNV' => 'TTNGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 752,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 411,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 752,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 405,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 752,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 407,
            'CD_ARNV' => 'TTKGR',
        ]);
        
        Flight::create([
            'NR_VOO' => 753,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 7,
            'CD_ARNV' => 'TTUGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 753,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTLOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 754,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTUGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 754,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 121,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 755,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 756,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 218,
            'CD_ARNV' => 'TTUGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 756,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 341,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 757,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 41,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 757,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 141,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 757,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTKGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 758,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 188,
            'CD_ARNV' => 'TTRGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 758,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 341,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 759,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 141,
            'CD_ARNV' => 'TTTON',
        ]);
        
        Flight::create([
            'NR_VOO' => 759,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 198,
            'CD_ARNV' => 'TTNGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 760,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 409,
            'CD_ARNV' => 'TTRGI',
        ]);
        
        Flight::create([
            'NR_VOO' => 760,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 241,
            'CD_ARNV' => 'TTTOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 761,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 41,
            'CD_ARNV' => 'TTHON',
        ]);
        
        Flight::create([
            'NR_VOO' => 761,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 119,
            'CD_ARNV' => 'TTKGN',
        ]);
        
        Flight::create([
            'NR_VOO' => 761,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 762,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 51,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 762,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 76,
            'CD_ARNV' => 'TTKOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 762,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 229,
            'CD_ARNV' => 'TTKGO',
        ]);
        
        Flight::create([
            'NR_VOO' => 763,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 379,
            'CD_ARNV' => 'TTIGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 763,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 351,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 764,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 379,
            'CD_ARNV' => 'TTIGU',
        ]);
        
        Flight::create([
            'NR_VOO' => 764,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 261,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 765,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 361,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 765,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 110,
            'CD_ARNV' => 'TTKFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 766,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 320,
            'CD_ARNV' => 'TTKFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 766,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 261,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 767,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTUFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 767,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 71,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 768,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 270,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 768,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 366,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 769,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 226,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 769,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 180,
            'CD_ARNV' => 'TTLFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 769,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 191,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 770,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 102,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 770,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 231,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 770,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 301,
            'CD_ARNV' => 'TTLFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 771,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 373,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 771,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 131,
            'CD_ARNV' => 'TTUFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 771,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 2,
            'CD_ARNV' => 'TTLOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 772,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 212,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 772,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 181,
            'CD_ARNV' => 'TTKFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 773,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 381,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 773,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 312,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 774,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 122,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 775,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 122,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 775,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTUFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 776,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 52,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 776,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 122,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 777,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 382,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 777,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 332,
            'CD_ARNV' => 'TTSON',
        ]);
        
        Flight::create([
            'NR_VOO' => 777,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 313,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 778,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 778,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 778,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 232,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 779,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 232,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 779,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 33,
            'CD_ARNV' => 'TTUFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 780,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 43,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 780,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 408,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 780,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 142,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 781,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTUFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 781,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 242,
            'CD_ARNV' => 'TTSON',
        ]);
        
        Flight::create([
            'NR_VOO' => 782,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 163,
            'CD_ARNV' => 'TTUFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 782,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 242,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 783,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 783,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTUFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 783,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 252,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 784,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 52,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 784,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 784,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 785,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 52,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 785,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 373,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 785,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 64,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 786,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 179,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 786,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 374,
            'CD_ARNV' => 'TTKFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 786,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTFON',
        ]);
        
        Flight::create([
            'NR_VOO' => 787,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 787,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 94,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 788,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 788,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 62,
            'CD_ARNV' => 'TTTOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 789,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 55,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 789,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 790,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 72,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 790,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 791,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 182,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 791,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 275,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 792,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 792,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 382,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 793,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 226,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 793,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 794,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 794,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 192,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 795,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 237,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 795,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 795,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 292,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 796,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 392,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 796,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 337,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 797,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 92,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 797,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 157,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 798,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 77,
            'CD_ARNV' => 'TTKFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 798,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 313,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 799,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTLFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 800,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 13,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 800,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 28,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 801,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 801,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 268,
            'CD_ARNV' => 'TTUFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 802,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 802,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 803,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 123,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 803,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 229,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 804,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 804,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 233,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 805,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 805,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 369,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 806,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 179,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 806,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 133,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 807,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 43,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 807,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 89,
            'CD_ARNV' => 'TTLFR',
        ]);
        
        Flight::create([
            'NR_VOO' => 807,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 808,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 300,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 808,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 343,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 809,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 143,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 809,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 20,
            'CD_ARNV' => 'TTUDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 810,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 53,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 810,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 408,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 810,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 811,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 811,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 369,
            'CD_ARNV' => 'TTOFI',
        ]);
        
        Flight::create([
            'NR_VOO' => 811,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 812,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 812,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 812,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 813,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 813,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 50,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 814,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 380,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 814,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 814,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 163,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 815,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 263,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 815,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 90,
            'CD_ARNV' => 'TTUDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 816,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 816,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 817,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 817,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 818,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 25,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 818,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 373,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 818,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 819,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 373,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 819,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 231,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 820,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 141,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 820,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTIOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 821,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 821,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 241,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 822,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 271,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 822,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 823,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 823,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 171,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 824,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 283,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 824,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 825,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 383,
            'CD_ARNV' => 'TTHON',
        ]);
        
        Flight::create([
            'NR_VOO' => 825,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 281,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 826,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 304,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 826,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 391,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 827,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 414,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 827,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 291,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 828,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 14,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 828,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 239,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 829,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 14,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 829,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 208,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 830,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 24,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 830,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 831,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 324,
            'CD_ARNV' => 'TTKOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 831,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 12,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 832,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 224,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 832,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 22,
            'CD_ARNV' => 'TTKDW',
        ]);
        
        Flight::create([
            'NR_VOO' => 833,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 142,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 833,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 124,
            'CD_ARNV' => 'TTKOC',
        ]);
        
        Flight::create([
            'NR_VOO' => 834,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 834,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 252,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 835,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 835,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 344,
            'CD_ARNV' => 'TTTOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 836,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 254,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 836,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 372,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 837,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 172,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 837,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 838,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 413,
            'CD_ARNV' => 'TTKDW',
        ]);
        
        Flight::create([
            'NR_VOO' => 838,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTLOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 839,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 839,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 354,
            'CD_ARNV' => 'TTLOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 840,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 323,
            'CD_ARNV' => 'TTODO',
        ]);
        
        Flight::create([
            'NR_VOO' => 840,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 154,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 841,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 164,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 841,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 243,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 842,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 353,
            'CD_ARNV' => 'TTUDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 842,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 64,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 843,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 174,
            'CD_ARNV' => 'TTFON',
        ]);
        
        Flight::create([
            'NR_VOO' => 843,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 843,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 363,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 844,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 844,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 273,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 845,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 845,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 846,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTSON',
        ]);
        
        Flight::create([
            'NR_VOO' => 846,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 847,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 847,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 848,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 848,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 848,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 205,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 849,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 115,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 849,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 93,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 850,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 204,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 850,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 339,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 850,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 15,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 851,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 114,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 851,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 215,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 851,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 387,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 852,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 25,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 852,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 853,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 215,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 853,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 853,
            'DT_SAIDA_VOO' => '1993-01-30',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 854,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 125,
            'CD_ARNV' => 'TTKOF',
        ]);
        
        Flight::create([
            'NR_VOO' => 854,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 854,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 234,
            'CD_ARNV' => 'TTIDL',
        ]);
        
        Flight::create([
            'NR_VOO' => 855,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 134,
            'CD_ARNV' => 'TTKDW',
        ]);
        
        Flight::create([
            'NR_VOO' => 855,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 856,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 34,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 856,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 235,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 857,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 144,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 857,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTTON',
        ]);
        
        Flight::create([
            'NR_VOO' => 858,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 858,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 135,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 859,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 274,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 859,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 860,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 860,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTKFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 860,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 861,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 145,
            'CD_ARNV' => 'TTTOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 861,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 862,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 55,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 862,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 394,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 863,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 864,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 865,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 115,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 865,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 265,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 866,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 245,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 867,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 285,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 867,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 45,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 868,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 355,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 868,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 869,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 175,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 869,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 870,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 6,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 870,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 871,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 395,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 871,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 416,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 872,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTKCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 872,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 236,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 872,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 195,
            'CD_ARNV' => 'TTTOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 873,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 46,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 873,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 95,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 874,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 306,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 874,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 266,
            'CD_ARNV' => 'TTKDM',
        ]);
        
        Flight::create([
            'NR_VOO' => 875,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 206,
            'CD_ARNV' => 'TTKOT',
        ]);
        
        Flight::create([
            'NR_VOO' => 876,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 106,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 876,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 186,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 877,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 877,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 878,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 878,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 207,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 879,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 126,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 879,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 407,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 880,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 880,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 26,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 881,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 881,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 326,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 882,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 233,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 882,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 336,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 882,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 883,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 883,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 36,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 884,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 246,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 884,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 885,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 114,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 885,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 885,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 257,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 886,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 15,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 886,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 886,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 387,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 887,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 208,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 887,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 888,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 408,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 888,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 888,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 204,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 888,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 129,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 889,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 408,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 889,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 366,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 890,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 76,
            'CD_ARNV' => 'TTKOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 890,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 891,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 376,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 891,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 8,
            'CD_ARNV' => 'TTKDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 892,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 86,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 892,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 328,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 893,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 348,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 893,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 186,
            'CD_ARNV' => 'TTKOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 894,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 258,
            'CD_ARNV' => 'TTODO',
        ]);
        
        Flight::create([
            'NR_VOO' => 895,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 275,
            'CD_ARNV' => 'TTKFF',
        ]);
        
        Flight::create([
            'NR_VOO' => 895,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 158,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 895,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 196,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 896,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 896,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 368,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 897,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 897,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 898,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 398,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 898,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 899,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 899,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 96,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 900,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTIDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 900,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 901,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 901,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 296,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 902,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 307,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 902,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 319,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 903,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 119,
            'CD_ARNV' => 'TTODO',
        ]);
        
        Flight::create([
            'NR_VOO' => 903,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 7,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 904,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 182,
            'CD_ARNV' => 'TTSOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 904,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 19,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 904,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 905,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 259,
            'CD_ARNV' => 'TTNDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 905,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 906,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 117,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 906,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTODR',
        ]);
        
        Flight::create([
            'NR_VOO' => 906,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 257,
            'CD_ARNV' => 'TTKDS',
        ]);
        
        Flight::create([
            'NR_VOO' => 907,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTROD',
        ]);
        
        Flight::create([
            'NR_VOO' => 907,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 146,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 907,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 69,
            'CD_ARNV' => 'TTKDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 908,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 327,
            'CD_ARNV' => 'TTHON',
        ]);
        
        Flight::create([
            'NR_VOO' => 908,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 199,
            'CD_ARNV' => 'TTNDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 909,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 337,
            'CD_ARNV' => 'TTROL',
        ]);
        
        Flight::create([
            'NR_VOO' => 909,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 299,
            'CD_ARNV' => 'TTNDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 910,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 399,
            'CD_ARNV' => 'TTKDU',
        ]);
        
        Flight::create([
            'NR_VOO' => 910,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 37,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 911,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 237,
            'CD_ARNV' => 'TTLOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 911,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 99,
            'CD_ARNV' => 'TTKDR',
        ]);
        
        Flight::create([
            'NR_VOO' => 912,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 100,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 912,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 37,
            'CD_ARNV' => 'TTSON',
        ]);
        
        Flight::create([
            'NR_VOO' => 913,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 237,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 913,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 310,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 913,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 93,
            'CD_ARNV' => 'TTKDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 914,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 120,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 914,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 347,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 915,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 247,
            'CD_ARNV' => 'TTKOC',
        ]);
        
        Flight::create([
            'NR_VOO' => 915,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 30,
            'CD_ARNV' => 'TTKCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 916,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 230,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 917,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 267,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 917,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 317,
            'CD_ARNV' => 'TTRDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 917,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 240,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 918,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 267,
            'CD_ARNV' => 'TTLOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 918,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 40,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 919,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 67,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 919,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 250,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 920,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 367,
            'CD_ARNV' => 'TTSON',
        ]);
        
        Flight::create([
            'NR_VOO' => 920,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 60,
            'CD_ARNV' => 'TTUCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 921,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 270,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 921,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 77,
            'CD_ARNV' => 'TTDOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 922,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 201,
            'CD_ARNV' => 'TTKCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 922,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 284,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 922,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 246,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 922,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 277,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 923,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 111,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 923,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 187,
            'CD_ARNV' => 'TTDOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 924,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 11,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 924,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 287,
            'CD_ARNV' => 'TTSOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 925,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 925,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 397,
            'CD_ARNV' => 'TTKOQ',
        ]);
        
        Flight::create([
            'NR_VOO' => 925,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTTON',
        ]);
        
        Flight::create([
            'NR_VOO' => 925,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 926,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 397,
            'CD_ARNV' => 'TTKOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 926,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 221,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 927,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 197,
            'CD_ARNV' => 'TTKOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 927,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 161,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 928,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 81,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 928,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 388,
            'CD_ARNV' => 'TTLOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 929,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 8,
            'CD_ARNV' => 'TTROS',
        ]);
        
        Flight::create([
            'NR_VOO' => 929,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 291,
            'CD_ARNV' => 'TTNCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 930,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 308,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 930,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 291,
            'CD_ARNV' => 'TTNCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 931,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 302,
            'CD_ARNV' => 'TTKCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 931,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 118,
            'CD_ARNV' => 'TTKOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 932,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 18,
            'CD_ARNV' => 'TTLOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 932,
            'DT_SAIDA_VOO' => '1993-01-29',
            'NR_ROTA_VOO' => 322,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 933,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 42,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 933,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 128,
            'CD_ARNV' => 'TTKOC',
        ]);
        
        Flight::create([
            'NR_VOO' => 934,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 338,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 934,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 352,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 935,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 48,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 935,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 362,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 936,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 172,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 936,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTOCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 936,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 148,
            'CD_ARNV' => 'TTIOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 937,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 258,
            'CD_ARNV' => 'TTRON',
        ]);
        
        Flight::create([
            'NR_VOO' => 937,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 272,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 938,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 282,
            'CD_ARNV' => 'TTKCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 938,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 939,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 282,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 939,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 258,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 940,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 68,
            'CD_ARNV' => 'TTKOB',
        ]);
        
        Flight::create([
            'NR_VOO' => 940,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 403,
            'CD_ARNV' => 'TTNCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 941,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 941,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 278,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 941,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 113,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 942,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 13,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 942,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 943,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 288,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 943,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 943,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 211,
            'CD_ARNV' => 'TTLDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 943,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 78,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 944,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 23,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 944,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 378,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 945,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 945,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 115,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 945,
            'DT_SAIDA_VOO' => '1993-01-23',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 946,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 946,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 288,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 946,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 63,
            'CD_ARNV' => 'TTOCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 947,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 388,
            'CD_ARNV' => 'TTLOI',
        ]);
        
        Flight::create([
            'NR_VOO' => 947,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 163,
            'CD_ARNV' => 'TTKCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 948,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 163,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 948,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 88,
            'CD_ARNV' => 'TTTON',
        ]);
        
        Flight::create([
            'NR_VOO' => 949,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 173,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 949,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 98,
            'CD_ARNV' => 'TTGOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 950,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 9,
            'CD_ARNV' => 'TTROC',
        ]);
        
        Flight::create([
            'NR_VOO' => 950,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 333,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 950,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 104,
            'CD_ARNV' => 'TTKCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 951,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 309,
            'CD_ARNV' => 'TTLOU',
        ]);
        
        Flight::create([
            'NR_VOO' => 952,
            'DT_SAIDA_VOO' => '1993-01-15',
            'NR_ROTA_VOO' => 219,
            'CD_ARNV' => 'TTKOM',
        ]);
        
        Flight::create([
            'NR_VOO' => 952,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 314,
            'CD_ARNV' => 'TTKCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 953,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 224,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 953,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 419,
            'CD_ARNV' => 'TTTON',
        ]);
        
        Flight::create([
            'NR_VOO' => 953,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 365,
            'CD_ARNV' => 'TTFFO',
        ]);
        
        Flight::create([
            'NR_VOO' => 954,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 164,
            'CD_ARNV' => 'TTOCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 954,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 205,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 954,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 319,
            'CD_ARNV' => 'TTJOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 955,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 284,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 955,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 129,
            'CD_ARNV' => 'TTLOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 956,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTKCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 956,
            'DT_SAIDA_VOO' => '1993-01-31',
            'NR_ROTA_VOO' => 339,
            'CD_ARNV' => 'TTGON',
        ]);
        
        Flight::create([
            'NR_VOO' => 957,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 957,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 239,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 958,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 5,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 958,
            'DT_SAIDA_VOO' => '1993-01-09',
            'NR_ROTA_VOO' => 83,
            'CD_ARNV' => 'TTODI',
        ]);
        
        Flight::create([
            'NR_VOO' => 958,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTGOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 959,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 405,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 959,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 249,
            'CD_ARNV' => 'TTLOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 960,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 325,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 960,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 349,
            'CD_ARNV' => 'TTKOG',
        ]);
        
        Flight::create([
            'NR_VOO' => 961,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 961,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 149,
            'CD_ARNV' => 'TTMOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 961,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 35,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 962,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 335,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 962,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 249,
            'CD_ARNV' => 'TTIOV',
        ]);
        
        Flight::create([
            'NR_VOO' => 963,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 359,
            'CD_ARNV' => 'TTDOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 963,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 335,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 964,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 345,
            'CD_ARNV' => 'TTICT',
        ]);
        
        Flight::create([
            'NR_VOO' => 964,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 194,
            'CD_ARNV' => 'TTPOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 964,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 159,
            'CD_ARNV' => 'TTKON',
        ]);
        
        Flight::create([
            'NR_VOO' => 965,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 375,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 965,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 966,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 375,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 966,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 59,
            'CD_ARNV' => 'TTIOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 967,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 16,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 967,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 36,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 967,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 169,
            'CD_ARNV' => 'TTFON',
        ]);
        
        Flight::create([
            'NR_VOO' => 968,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 968,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTIDN',
        ]);
        
        Flight::create([
            'NR_VOO' => 968,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTLOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 969,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 216,
            'CD_ARNV' => 'TTOCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 969,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTKOD',
        ]);
        
        Flight::create([
            'NR_VOO' => 970,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 79,
            'CD_ARNV' => 'TTKOK',
        ]);
        
        Flight::create([
            'NR_VOO' => 970,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 316,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 971,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 90,
            'CD_ARNV' => 'TTUDI',
        ]);
        
        Flight::create([
            'NR_VOO' => 971,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 56,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 971,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTKOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 972,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 256,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 972,
            'DT_SAIDA_VOO' => '1993-01-19',
            'NR_ROTA_VOO' => 289,
            'CD_ARNV' => 'TTKOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 973,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 366,
            'CD_ARNV' => 'TTNCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 973,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 389,
            'CD_ARNV' => 'TTKOP',
        ]);
        
        Flight::create([
            'NR_VOO' => 974,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 66,
            'CD_ARNV' => 'TTUCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 974,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 389,
            'CD_ARNV' => 'TTIOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 975,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 263,
            'CD_ARNV' => 'TTIOL',
        ]);
        
        Flight::create([
            'NR_VOO' => 975,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 386,
            'CD_ARNV' => 'TTKCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 975,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 399,
            'CD_ARNV' => 'TTFON',
        ]);
        
        Flight::create([
            'NR_VOO' => 976,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 200,
            'CD_ARNV' => 'TTKNV',
        ]);
        
        Flight::create([
            'NR_VOO' => 976,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 286,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 977,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 300,
            'CD_ARNV' => 'TTKNU',
        ]);
        
        Flight::create([
            'NR_VOO' => 977,
            'DT_SAIDA_VOO' => '1993-01-20',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTSCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 978,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 267,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 978,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 220,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 979,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 330,
            'CD_ARNV' => 'TTKNR',
        ]);
        
        Flight::create([
            'NR_VOO' => 979,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 67,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 979,
            'DT_SAIDA_VOO' => '1993-01-05',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 980,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 378,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 980,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTLCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 980,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 340,
            'CD_ARNV' => 'TTKNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 981,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 177,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 981,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 140,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 982,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 350,
            'CD_ARNV' => 'TTONT',
        ]);
        
        Flight::create([
            'NR_VOO' => 982,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 72,
            'CD_ARNV' => 'TTFOR',
        ]);
        
        Flight::create([
            'NR_VOO' => 982,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 387,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 983,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 350,
            'CD_ARNV' => 'TTINO',
        ]);
        
        Flight::create([
            'NR_VOO' => 983,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 184,
            'CD_ARNV' => 'TTSON',
        ]);
        
        Flight::create([
            'NR_VOO' => 983,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 297,
            'CD_ARNV' => 'TTRCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 984,
            'DT_SAIDA_VOO' => '1993-01-18',
            'NR_ROTA_VOO' => 260,
            'CD_ARNV' => 'TTINV',
        ]);
        
        Flight::create([
            'NR_VOO' => 984,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 108,
            'CD_ARNV' => 'TTKCL',
        ]);
        
        Flight::create([
            'NR_VOO' => 985,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 218,
            'CD_ARNV' => 'TTICO',
        ]);
        
        Flight::create([
            'NR_VOO' => 985,
            'DT_SAIDA_VOO' => '1993-01-27',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTUNO',
        ]);
        
        Flight::create([
            'NR_VOO' => 986,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 318,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 986,
            'DT_SAIDA_VOO' => '1993-01-28',
            'NR_ROTA_VOO' => 360,
            'CD_ARNV' => 'TTUNC',
        ]);
        
        Flight::create([
            'NR_VOO' => 987,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 418,
            'CD_ARNV' => 'TTRCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 987,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 183,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 987,
            'DT_SAIDA_VOO' => '1993-01-17',
            'NR_ROTA_VOO' => 370,
            'CD_ARNV' => 'TTONN',
        ]);
        
        Flight::create([
            'NR_VOO' => 988,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 70,
            'CD_ARNV' => 'TTINI',
        ]);
        
        Flight::create([
            'NR_VOO' => 988,
            'DT_SAIDA_VOO' => '1993-01-22',
            'NR_ROTA_VOO' => 28,
            'CD_ARNV' => 'TTNCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 989,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 162,
            'CD_ARNV' => 'TTJOS',
        ]);
        
        Flight::create([
            'NR_VOO' => 989,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 380,
            'CD_ARNV' => 'TTNNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 990,
            'DT_SAIDA_VOO' => '1993-01-01',
            'NR_ROTA_VOO' => 84,
            'CD_ARNV' => 'TTKOZ',
        ]);
        
        Flight::create([
            'NR_VOO' => 990,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 390,
            'CD_ARNV' => 'TTONS',
        ]);
        
        Flight::create([
            'NR_VOO' => 990,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 338,
            'CD_ARNV' => 'TTUCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 991,
            'DT_SAIDA_VOO' => '1993-01-14',
            'NR_ROTA_VOO' => 338,
            'CD_ARNV' => 'TTKCY',
        ]);
        
        Flight::create([
            'NR_VOO' => 991,
            'DT_SAIDA_VOO' => '1993-01-16',
            'NR_ROTA_VOO' => 301,
            'CD_ARNV' => 'TTONS',
        ]);
        
        Flight::create([
            'NR_VOO' => 992,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 101,
            'CD_ARNV' => 'TTKNI',
        ]);
        
        Flight::create([
            'NR_VOO' => 992,
            'DT_SAIDA_VOO' => '1993-01-12',
            'NR_ROTA_VOO' => 248,
            'CD_ARNV' => 'TTUCI',
        ]);
        
        Flight::create([
            'NR_VOO' => 993,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 411,
            'CD_ARNV' => 'TTSNY',
        ]);
        
        Flight::create([
            'NR_VOO' => 993,
            'DT_SAIDA_VOO' => '1993-01-07',
            'NR_ROTA_VOO' => 217,
            'CD_ARNV' => 'TTIDO',
        ]);
        
        Flight::create([
            'NR_VOO' => 993,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTICH',
        ]);
        
        Flight::create([
            'NR_VOO' => 994,
            'DT_SAIDA_VOO' => '1993-01-10',
            'NR_ROTA_VOO' => 21,
            'CD_ARNV' => 'TTONI',
        ]);
        
        Flight::create([
            'NR_VOO' => 994,
            'DT_SAIDA_VOO' => '1993-01-26',
            'NR_ROTA_VOO' => 58,
            'CD_ARNV' => 'TTKCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 995,
            'DT_SAIDA_VOO' => '1993-01-04',
            'NR_ROTA_VOO' => 321,
            'CD_ARNV' => 'TTKNN',
        ]);
        
        Flight::create([
            'NR_VOO' => 995,
            'DT_SAIDA_VOO' => '1993-01-21',
            'NR_ROTA_VOO' => 198,
            'CD_ARNV' => 'TTKCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 996,
            'DT_SAIDA_VOO' => '1993-01-02',
            'NR_ROTA_VOO' => 309,
            'CD_ARNV' => 'TTKCT',
        ]);
        
        Flight::create([
            'NR_VOO' => 997,
            'DT_SAIDA_VOO' => '1993-01-11',
            'NR_ROTA_VOO' => 219,
            'CD_ARNV' => 'TTOCH',
        ]);
        
        Flight::create([
            'NR_VOO' => 997,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 251,
            'CD_ARNV' => 'TTINC',
        ]);
        
        Flight::create([
            'NR_VOO' => 998,
            'DT_SAIDA_VOO' => '1993-01-24',
            'NR_ROTA_VOO' => 251,
            'CD_ARNV' => 'TTINC',
        ]);
        
        Flight::create([
            'NR_VOO' => 998,
            'DT_SAIDA_VOO' => '1993-01-25',
            'NR_ROTA_VOO' => 239,
            'CD_ARNV' => 'TTNCO',
        ]);
        
        Flight::create([
            'NR_VOO' => 999,
            'DT_SAIDA_VOO' => '1993-01-03',
            'NR_ROTA_VOO' => 61,
            'CD_ARNV' => 'TTONN',
        ]);
        
        Flight::create([
            'NR_VOO' => 999,
            'DT_SAIDA_VOO' => '1993-01-06',
            'NR_ROTA_VOO' => 49,
            'CD_ARNV' => 'TTICT',
        ]);
    }
}
