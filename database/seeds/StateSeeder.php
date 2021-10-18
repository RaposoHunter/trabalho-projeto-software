<?php

use App\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'SG_UF' => 'AC',
            'NM_UF' => 'ACRE',
        ]);
        
        State::create([
            'SG_UF' => 'AL',
            'NM_UF' => 'ALAGOAS',
        ]);
        
        State::create([
            'SG_UF' => 'AM',
            'NM_UF' => 'AMAZONAS',
        ]);
        
        State::create([
            'SG_UF' => 'AP',
            'NM_UF' => 'AMAPA',
        ]);
        
        State::create([
            'SG_UF' => 'BA',
            'NM_UF' => 'BAHIA',
        ]);
        
        State::create([
            'SG_UF' => 'CE',
            'NM_UF' => 'CEARA',
        ]);
        
        State::create([
            'SG_UF' => 'DF',
            'NM_UF' => 'DISTRITO FEDERAL',
        ]);
        
        State::create([
            'SG_UF' => 'ES',
            'NM_UF' => 'ESPIRITO SANTO',
        ]);
        
        State::create([
            'SG_UF' => 'FN',
            'NM_UF' => 'FERNANDO DE NORONHA',
        ]);
        
        State::create([
            'SG_UF' => 'GO',
            'NM_UF' => 'GOIAS',
        ]);
        
        State::create([
            'SG_UF' => 'MA',
            'NM_UF' => 'MARANHAO',
        ]);
        
        State::create([
            'SG_UF' => 'MG',
            'NM_UF' => 'MINAS GERAIS',
        ]);
        
        State::create([
            'SG_UF' => 'MS',
            'NM_UF' => 'MATO GROSSO DO SUL',
        ]);
        
        State::create([
            'SG_UF' => 'MT',
            'NM_UF' => 'MATO GROSSO',
        ]);
        
        State::create([
            'SG_UF' => 'PA',
            'NM_UF' => 'PARA',
        ]);
        
        State::create([
            'SG_UF' => 'PB',
            'NM_UF' => 'PARAIBA',
        ]);
        
        State::create([
            'SG_UF' => 'PE',
            'NM_UF' => 'PERNAMBUCO',
        ]);
        
        State::create([
            'SG_UF' => 'PI',
            'NM_UF' => 'PIAUI',
        ]);
        
        State::create([
            'SG_UF' => 'PR',
            'NM_UF' => 'PARANA',
        ]);
        
        State::create([
            'SG_UF' => 'RJ',
            'NM_UF' => 'RIO DE JANEIRO',
        ]);
        
        State::create([
            'SG_UF' => 'RN',
            'NM_UF' => 'RIO GRANDE DO NORTE',
        ]);
        
        State::create([
            'SG_UF' => 'RO',
            'NM_UF' => 'RONDONIA',
        ]);
        
        State::create([
            'SG_UF' => 'RR',
            'NM_UF' => 'RORAIMA',
        ]);
        
        State::create([
            'SG_UF' => 'RS',
            'NM_UF' => 'RIO GRANDE DO SUL',
        ]);
        
        State::create([
            'SG_UF' => 'SC',
            'NM_UF' => 'SANTA CATARINA',
        ]);
        
        State::create([
            'SG_UF' => 'SE',
            'NM_UF' => 'SERGIPE',
        ]);
        
        State::create([
            'SG_UF' => 'SP',
            'NM_UF' => 'SAO PAULO',
        ]);
        
        State::create([
            'SG_UF' => 'TO',
            'NM_UF' => 'TOCANTINS',
        ]);        
    }
}
