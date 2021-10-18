<?php

use App\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create([
            'CD_EQPT' => '100',
            'NM_EQPT' => 'FOKKER 100',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 90,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '310',
            'NM_EQPT' => 'AIRBUS A310',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 210,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '313',
            'NM_EQPT' => 'AIRBUS A310',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 201,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '707',
            'NM_EQPT' => 'BOEING 707',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 222,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '727',
            'NM_EQPT' => 'BOEING 727-100',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 3,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 120,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '72S',
            'NM_EQPT' => 'BOEING 727-200',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 3,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 140,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '733',
            'NM_EQPT' => 'BOEING 737-300',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 119,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '734',
            'NM_EQPT' => 'BOEING 737-400',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 140,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '73S',
            'NM_EQPT' => 'BOEING 737-200 ADVANCED',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 110,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '743',
            'NM_EQPT' => 'BOEING 747-300(PAX)',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 402,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '744',
            'NM_EQPT' => 'BOEING 747-400(PAX)',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 440,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '747',
            'NM_EQPT' => 'BOEING 747-200(PAX)',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 420,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '74D',
            'NM_EQPT' => 'BOEING 747-300B(PAX-CARGA)',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 400,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '74L',
            'NM_EQPT' => 'JATO 747 SP(JUMBO SPECIAL PERFORMANCE)',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 520,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '74M',
            'NM_EQPT' => 'BOEING 747-200B(PAX-CARGA)',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 400,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '757',
            'NM_EQPT' => 'BOEING 757',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 350,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '763',
            'NM_EQPT' => 'BOEING 767-300',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 280,
        ]);
        
        Equipment::create([
            'CD_EQPT' => '767',
            'NM_EQPT' => 'BOEING 767-200',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 290,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'AB3',
            'NM_EQPT' => 'AIRBUS A300',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 210,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'BH2',
            'NM_EQPT' => 'BELL JET RANGER III',
            'DC_TIPO_EQPT' => 'HELICOPTERO',
            'QT_MOTOR' => 1,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 8,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'CNA',
            'NM_EQPT' => 'CESSNA CARAVAN',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 10,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'D10',
            'NM_EQPT' => 'DOUGLAS DC-10',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 3,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 250,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'D8S',
            'NM_EQPT' => 'DOUGLAS SUPER DC8-63',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => null,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'DC8',
            'NM_EQPT' => 'DOUGLAS DC-8',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 200,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'DC9',
            'NM_EQPT' => 'DOUGLAS DC-9',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 210,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'DH8',
            'NM_EQPT' => 'BOEING CANADA DHC8 DASH 8',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 230,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'EM2',
            'NM_EQPT' => 'BRASILIA',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 22,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'EMB',
            'NM_EQPT' => 'BANDEIRANTE',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 18,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'F27',
            'NM_EQPT' => 'FOKKER-F27 FRIENDSHIP',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 65,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'F28',
            'NM_EQPT' => 'FOKKER 28',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 80,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'F50',
            'NM_EQPT' => 'FOKKER F50',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 140,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'FK7',
            'NM_EQPT' => 'FAIRCHILD-FH-227B',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => null,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'L10',
            'NM_EQPT' => 'LOCKHEED-L-1011-TRI-STAR',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 3,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 300,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'L15',
            'NM_EQPT' => 'LOCKHEED-L-1011-500-TRI-STAR',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 3,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 320,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'LOE',
            'NM_EQPT' => 'ELECTRA II',
            'DC_TIPO_EQPT' => 'TURBO HELICE',
            'QT_MOTOR' => 4,
            'IC_TIPO_PRPS' => 'M',
            'QT_PSGR' => 130,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'M11',
            'NM_EQPT' => 'DOUGLAS MD-11',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 3,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 85,
        ]);
        
        Equipment::create([
            'CD_EQPT' => 'M88',
            'NM_EQPT' => 'DOUGLAS MD-88',
            'DC_TIPO_EQPT' => 'JATO',
            'QT_MOTOR' => 2,
            'IC_TIPO_PRPS' => 'R',
            'QT_PSGR' => 95,
        ]);
    }
}
