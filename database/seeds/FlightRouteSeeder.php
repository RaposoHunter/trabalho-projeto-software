<?php

use App\FlightRoute;
use Illuminate\Database\Seeder;

class FlightRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FlightRoute::create([
            'NR_ROTA_VOO' => 1,
            'CD_ARPT_ORIG' => 'AEP',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 2,
            'CD_ARPT_ORIG' => 'AKL',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 3,
            'CD_ARPT_ORIG' => 'AMM',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 4,
            'CD_ARPT_ORIG' => 'AMS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1050,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 5,
            'CD_ARPT_ORIG' => 'AOL',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1010,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 6,
            'CD_ARPT_ORIG' => 'ASU',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1060,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 7,
            'CD_ARPT_ORIG' => 'AUA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 8,
            'CD_ARPT_ORIG' => 'BAQ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 460,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 9,
            'CD_ARPT_ORIG' => 'BGI',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1090,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 10,
            'CD_ARPT_ORIG' => 'BGW',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 630,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 11,
            'CD_ARPT_ORIG' => 'BOG',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 12,
            'CD_ARPT_ORIG' => 'BRC',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 950,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 13,
            'CD_ARPT_ORIG' => 'BRU',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 14,
            'CD_ARPT_ORIG' => 'BUE',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 15,
            'CD_ARPT_ORIG' => 'CAS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 16,
            'CD_ARPT_ORIG' => 'CAY',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 230,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 17,
            'CD_ARPT_ORIG' => 'CBB',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1110,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 18,
            'CD_ARPT_ORIG' => 'CCS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 19,
            'CD_ARPT_ORIG' => 'CDG',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 510,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 20,
            'CD_ARPT_ORIG' => 'CMN',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 830,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 21,
            'CD_ARPT_ORIG' => 'COR',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 500,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 22,
            'CD_ARPT_ORIG' => 'CPC',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1210,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 23,
            'CD_ARPT_ORIG' => 'CPH',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 320,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 24,
            'CD_ARPT_ORIG' => 'CRD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 340,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 25,
            'CD_ARPT_ORIG' => 'CUN',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 400,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 26,
            'CD_ARPT_ORIG' => 'CUR',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 510,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 27,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 260,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 28,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 800,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 29,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 640,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 30,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 820,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 31,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 1150,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 32,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 280,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 33,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 910,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 34,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 450,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 35,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 890,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 36,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 820,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 37,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 970,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 38,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 910,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 39,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 350,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 40,
            'CD_ARPT_ORIG' => 'DCA',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 630,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 41,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 42,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1150,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 43,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 1000,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 44,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 45,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 46,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 350,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 47,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 500,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 48,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 550,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 49,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 50,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 960,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 51,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 1110,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 52,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 1160,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 53,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 210,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 54,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 560,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 55,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 210,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 56,
            'CD_ARPT_ORIG' => 'DFW',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 460,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 57,
            'CD_ARPT_ORIG' => 'EZE',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1020,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 58,
            'CD_ARPT_ORIG' => 'FCO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 920,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 59,
            'CD_ARPT_ORIG' => 'FRA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 810,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 60,
            'CD_ARPT_ORIG' => 'GEO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 61,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'AEP',
            'VR_PASG' => 1250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 62,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'AKL',
            'VR_PASG' => 270,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 63,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'AMM',
            'VR_PASG' => 500,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 64,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'AMS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 65,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'AOL',
            'VR_PASG' => 350,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 66,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'ASU',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 67,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'AUA',
            'VR_PASG' => 380,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 68,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BAQ',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 69,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BGI',
            'VR_PASG' => 400,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 70,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BGW',
            'VR_PASG' => 1230,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 71,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BOG',
            'VR_PASG' => 960,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 72,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BRC',
            'VR_PASG' => 1080,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 73,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BRU',
            'VR_PASG' => 1210,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 74,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'BUE',
            'VR_PASG' => 1040,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 75,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CAS',
            'VR_PASG' => 1160,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 76,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CAY',
            'VR_PASG' => 380,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 77,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CBB',
            'VR_PASG' => 1190,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 78,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CCS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 79,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CDG',
            'VR_PASG' => 1110,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 80,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CMN',
            'VR_PASG' => 340,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 81,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'COR',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 82,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CPC',
            'VR_PASG' => 290,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 83,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CPH',
            'VR_PASG' => 420,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 84,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CRD',
            'VR_PASG' => 350,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 85,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CUN',
            'VR_PASG' => 1170,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 86,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'CUR',
            'VR_PASG' => 290,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 87,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 300,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 88,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 800,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 89,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'EZE',
            'VR_PASG' => 1220,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 90,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'FCO',
            'VR_PASG' => 850,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 91,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'FRA',
            'VR_PASG' => 980,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 92,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'GEO',
            'VR_PASG' => 300,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 93,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'GUA',
            'VR_PASG' => 930,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 94,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'GVA',
            'VR_PASG' => 660,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 95,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'GYE',
            'VR_PASG' => 980,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 96,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'HAV',
            'VR_PASG' => 400,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 97,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 610,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 98,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 810,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 99,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'IGR',
            'VR_PASG' => 530,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 100,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'IQT',
            'VR_PASG' => 660,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 101,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 102,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'KIN',
            'VR_PASG' => 310,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 103,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LAD',
            'VR_PASG' => 640,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 104,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 970,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 105,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LCA',
            'VR_PASG' => 1190,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 106,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LHR',
            'VR_PASG' => 1210,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 107,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LIM',
            'VR_PASG' => 820,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 108,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LIN',
            'VR_PASG' => 920,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 109,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LIS',
            'VR_PASG' => 1240,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 110,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LON',
            'VR_PASG' => 870,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 111,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 112,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'LPB',
            'VR_PASG' => 320,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 113,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MAD',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 114,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MBJ',
            'VR_PASG' => 1080,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 115,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 1200,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 116,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MDQ',
            'VR_PASG' => 920,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 117,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MDZ',
            'VR_PASG' => 1030,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 118,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MEX',
            'VR_PASG' => 530,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 119,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 350,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 120,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MPM',
            'VR_PASG' => 1180,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 121,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MVD',
            'VR_PASG' => 510,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 122,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'MXP',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 123,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 360,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 124,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'NQN',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 125,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 410,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 126,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 1130,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 127,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'OPO',
            'VR_PASG' => 540,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 128,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 129,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'ORY',
            'VR_PASG' => 860,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 130,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'PAP',
            'VR_PASG' => 390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 131,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'PAR',
            'VR_PASG' => 420,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 132,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'PBM',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 133,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'PDP',
            'VR_PASG' => 870,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 134,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'POS',
            'VR_PASG' => 1200,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 135,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'PTY',
            'VR_PASG' => 820,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 136,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'PZO',
            'VR_PASG' => 1140,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 137,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'ROM',
            'VR_PASG' => 450,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 138,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'ROS',
            'VR_PASG' => 650,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 139,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SCL',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 140,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SCQ',
            'VR_PASG' => 900,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 141,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SDQ',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 142,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SEL',
            'VR_PASG' => 450,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 143,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 580,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 144,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SID',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 145,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SJO',
            'VR_PASG' => 1130,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 146,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SRZ',
            'VR_PASG' => 550,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 147,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'SYD',
            'VR_PASG' => 1260,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 148,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 360,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 149,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'UIO',
            'VR_PASG' => 480,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 150,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'VVI',
            'VR_PASG' => 410,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 151,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 540,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 152,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'YMQ',
            'VR_PASG' => 460,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 153,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'YMX',
            'VR_PASG' => 690,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 154,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'YTO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 155,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'YYZ',
            'VR_PASG' => 1040,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 156,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'ZRH',
            'VR_PASG' => 660,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 157,
            'CD_ARPT_ORIG' => 'GUA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 158,
            'CD_ARPT_ORIG' => 'GVA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1060,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 159,
            'CD_ARPT_ORIG' => 'GYE',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 160,
            'CD_ARPT_ORIG' => 'HAV',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 310,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 161,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 680,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 162,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 540,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 163,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 300,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 164,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 1060,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 165,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 650,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 166,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 167,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 600,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 168,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 570,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 169,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 520,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 170,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 820,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 171,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 890,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 172,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1050,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 173,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 810,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 174,
            'CD_ARPT_ORIG' => 'IAD',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 175,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 560,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 176,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 350,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 177,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 310,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 178,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 980,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 179,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 180,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 1130,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 181,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 800,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 182,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 460,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 183,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 184,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 480,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 185,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 370,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 186,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 360,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 187,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 520,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 188,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 690,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 189,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 540,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 190,
            'CD_ARPT_ORIG' => 'IAH',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 240,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 191,
            'CD_ARPT_ORIG' => 'IGR',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 192,
            'CD_ARPT_ORIG' => 'IQT',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 193,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 220,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 194,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 195,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 220,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 196,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 570,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 197,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 610,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 198,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 860,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 199,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 600,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 200,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 201,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 1020,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 202,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 203,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 330,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 204,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 480,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 205,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 830,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 206,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 380,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 207,
            'CD_ARPT_ORIG' => 'JFK',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 208,
            'CD_ARPT_ORIG' => 'KIN',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 209,
            'CD_ARPT_ORIG' => 'LAD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 210,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 211,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 212,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 213,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 430,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 214,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 590,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 215,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 280,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 216,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 217,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 218,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 600,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 219,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 660,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 220,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 960,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 221,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 920,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 222,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1180,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 223,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 224,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 225,
            'CD_ARPT_ORIG' => 'LAX',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 226,
            'CD_ARPT_ORIG' => 'LCA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 630,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 227,
            'CD_ARPT_ORIG' => 'LHR',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1120,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 228,
            'CD_ARPT_ORIG' => 'LIM',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1180,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 229,
            'CD_ARPT_ORIG' => 'LIN',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 590,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 230,
            'CD_ARPT_ORIG' => 'LIS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1220,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 231,
            'CD_ARPT_ORIG' => 'LON',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 610,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 232,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 233,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 970,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 234,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 235,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 920,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 236,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 1040,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 237,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 1160,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 238,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 1280,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 239,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 800,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 240,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 380,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 241,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 242,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 950,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 243,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 480,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 244,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1000,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 245,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 1030,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 246,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 550,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 247,
            'CD_ARPT_ORIG' => 'LOS',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 1170,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 248,
            'CD_ARPT_ORIG' => 'LPB',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 650,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 249,
            'CD_ARPT_ORIG' => 'MAD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 870,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 250,
            'CD_ARPT_ORIG' => 'MBJ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 251,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 860,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 252,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 253,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 220,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 254,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 260,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 255,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 300,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 256,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 1140,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 257,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 580,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 258,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 330,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 259,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 1060,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 260,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 261,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 262,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 263,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 264,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 1070,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 265,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 810,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 266,
            'CD_ARPT_ORIG' => 'MCO',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 450,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 267,
            'CD_ARPT_ORIG' => 'MDQ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 280,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 268,
            'CD_ARPT_ORIG' => 'MDZ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 400,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 269,
            'CD_ARPT_ORIG' => 'MEX',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 950,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 270,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 1030,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 271,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 450,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 272,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 470,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 273,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 800,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 274,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 1030,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 275,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 276,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 570,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 277,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 570,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 278,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 590,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 279,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 600,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 280,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 840,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 281,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 282,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1180,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 283,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 610,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 284,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 840,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 285,
            'CD_ARPT_ORIG' => 'MIA',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 260,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 286,
            'CD_ARPT_ORIG' => 'MPM',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 430,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 287,
            'CD_ARPT_ORIG' => 'MVD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 950,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 288,
            'CD_ARPT_ORIG' => 'MXP',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1170,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 289,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 290,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 1040,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 291,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 870,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 292,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 293,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 1010,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 294,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 230,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 295,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 296,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 297,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 670,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 298,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 980,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 299,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 300,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 550,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 301,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 680,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 302,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 303,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 304,
            'CD_ARPT_ORIG' => 'NGO',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 1140,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 305,
            'CD_ARPT_ORIG' => 'NQN',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 870,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 306,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 307,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 530,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 308,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 309,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 1020,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 310,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 380,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 311,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 320,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 312,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 313,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 314,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 950,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 315,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 470,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 316,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 810,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 317,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 318,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1180,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 319,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 320,
            'CD_ARPT_ORIG' => 'NRT',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 321,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 1310,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 322,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 960,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 323,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 324,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 1520,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 325,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 650,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 326,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 880,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 327,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 1010,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 328,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 640,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 329,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 330,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 1080,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 331,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 1320,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 332,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1470,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 333,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 1100,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 334,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 930,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 335,
            'CD_ARPT_ORIG' => 'NYC',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 336,
            'CD_ARPT_ORIG' => 'OPO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 540,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 337,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 1250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 338,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 690,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 339,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 340,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 500,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 341,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 630,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 342,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 470,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 343,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 920,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 344,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 860,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 345,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 1080,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 346,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 347,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 960,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 348,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 1200,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 349,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 850,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 350,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 1210,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 351,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 640,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 352,
            'CD_ARPT_ORIG' => 'ORD',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 880,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 353,
            'CD_ARPT_ORIG' => 'ORY',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1230,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 354,
            'CD_ARPT_ORIG' => 'PAP',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 810,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 355,
            'CD_ARPT_ORIG' => 'PAR',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1000,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 356,
            'CD_ARPT_ORIG' => 'PBM',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1000,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 357,
            'CD_ARPT_ORIG' => 'PDP',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 358,
            'CD_ARPT_ORIG' => 'POS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1190,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 359,
            'CD_ARPT_ORIG' => 'PTY',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1280,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 360,
            'CD_ARPT_ORIG' => 'PZO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1910,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 361,
            'CD_ARPT_ORIG' => 'ROM',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 362,
            'CD_ARPT_ORIG' => 'ROS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 860,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 363,
            'CD_ARPT_ORIG' => 'SCL',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 340,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 364,
            'CD_ARPT_ORIG' => 'SCQ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 580,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 365,
            'CD_ARPT_ORIG' => 'SDQ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1170,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 366,
            'CD_ARPT_ORIG' => 'SEL',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 840,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 367,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 430,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 368,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 970,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 369,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 510,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 370,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 371,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 830,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 372,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 480,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 373,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 1140,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 374,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 375,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 340,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 376,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 377,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 1140,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 378,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 580,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 379,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 420,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 380,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1090,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 381,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 1040,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 382,
            'CD_ARPT_ORIG' => 'SFO',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 383,
            'CD_ARPT_ORIG' => 'SID',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 384,
            'CD_ARPT_ORIG' => 'SJO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 610,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 385,
            'CD_ARPT_ORIG' => 'SRZ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 590,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 386,
            'CD_ARPT_ORIG' => 'SYD',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1490,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 387,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'DCA',
            'VR_PASG' => 1520,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 388,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 1250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 389,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 890,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 390,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'IAD',
            'VR_PASG' => 1190,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 391,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 1230,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 392,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 1080,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 393,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 1410,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 394,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 940,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 395,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 1470,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 396,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 1500,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 397,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 1130,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 398,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 1060,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 399,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 1500,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 400,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => 800,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 401,
            'CD_ARPT_ORIG' => 'TYO',
            'CD_ARPT_DEST' => 'WAS',
            'VR_PASG' => 1340,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 402,
            'CD_ARPT_ORIG' => 'UIO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 590,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 403,
            'CD_ARPT_ORIG' => 'VVI',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 840,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 404,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'DFW',
            'VR_PASG' => 1120,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 405,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1110,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 406,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'IAH',
            'VR_PASG' => 880,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 407,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'JFK',
            'VR_PASG' => 540,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 408,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'LAX',
            'VR_PASG' => 1010,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 409,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'LOS',
            'VR_PASG' => 1180,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 410,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'MCO',
            'VR_PASG' => 370,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 411,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'MIA',
            'VR_PASG' => 430,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 412,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'NGO',
            'VR_PASG' => 390,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 413,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'NRT',
            'VR_PASG' => 250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 414,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'NYC',
            'VR_PASG' => 230,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 415,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'ORD',
            'VR_PASG' => 420,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 416,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'SFO',
            'VR_PASG' => null,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 417,
            'CD_ARPT_ORIG' => 'WAS',
            'CD_ARPT_DEST' => 'TYO',
            'VR_PASG' => 450,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 418,
            'CD_ARPT_ORIG' => 'YMQ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1160,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 419,
            'CD_ARPT_ORIG' => 'YMX',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1270,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 420,
            'CD_ARPT_ORIG' => 'YTO',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1170,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 421,
            'CD_ARPT_ORIG' => 'YYZ',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1250,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 422,
            'CD_ARPT_ORIG' => 'ZRH',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 1090,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 423,
            'CD_ARPT_ORIG' => 'FEN',
            'CD_ARPT_DEST' => 'GIG',
            'VR_PASG' => 590,
        ]);
        
        FlightRoute::create([
            'NR_ROTA_VOO' => 424,
            'CD_ARPT_ORIG' => 'GIG',
            'CD_ARPT_DEST' => 'FEN',
            'VR_PASG' => 280,
        ]);   
    }
}
