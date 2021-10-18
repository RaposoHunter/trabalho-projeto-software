<?php

use App\Passenger;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passenger::create([
            'CD_PSGR' => 1,
            'NM_PSGR' => 'JOSE CONCESSO DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1930/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 2,
            'NM_PSGR' => 'JOAO CARLOS SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1932/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 3,
            'NM_PSGR' => 'LUIZ GONZAGA GUEDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1935/07/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 4,
            'NM_PSGR' => 'LUIZ DA COSTA LAGE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1936/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 5,
            'NM_PSGR' => 'WALMIR ALVARENGA RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1936/03/01',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 6,
            'NM_PSGR' => 'ANTONIO MARTINS PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1936/09/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 7,
            'NM_PSGR' => 'DIMAS FELISMINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1936/09/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 8,
            'NM_PSGR' => 'MIGUEL DE PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1936/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 9,
            'NM_PSGR' => 'JOSE BENEDITO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1936/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 10,
            'NM_PSGR' => 'ANTONIO DE OLIVEIRA FORMIGONI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1937/11/07',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 11,
            'NM_PSGR' => 'LUCIO HENRIQUE ROMAO SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1938/02/03',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 12,
            'NM_PSGR' => 'DOLANGE COSTA SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1938/07/13',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 13,
            'NM_PSGR' => 'GERALDO JOSE DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1939/02/26',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 14,
            'NM_PSGR' => 'ANTONIO BENEDITO MIRANDA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1939/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 15,
            'NM_PSGR' => 'JUAREZ DUQUE FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1939/06/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 16,
            'NM_PSGR' => 'VALTENCIR DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1940/04/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 17,
            'NM_PSGR' => 'PEDRO AURELIO DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/02/23',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 18,
            'NM_PSGR' => 'ANTONIO GERALDO VIGILATO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 19,
            'NM_PSGR' => 'GERALDO MARQUES VIDAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 20,
            'NM_PSGR' => 'JOSE FERREIRA S.NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 21,
            'NM_PSGR' => 'MARCO AURELIO TONIOLO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/08/06',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 22,
            'NM_PSGR' => 'EROS FROES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/12/16',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 23,
            'NM_PSGR' => 'PAULO M COLAMARCO BARRETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1941/12/20',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 24,
            'NM_PSGR' => 'JOSE VICENTE GONCALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1942/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 25,
            'NM_PSGR' => 'MARIO MOREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1943/05/20',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 26,
            'NM_PSGR' => 'JORGE DIOLINDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1944/04/16',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 27,
            'NM_PSGR' => 'JOSE VITOR DORNELAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1944/06/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 28,
            'NM_PSGR' => 'JOAO BATISTA VIEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1944/04/08',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 29,
            'NM_PSGR' => 'JOSE AFONSO CENACHI DRUMOND',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/04/03',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 30,
            'NM_PSGR' => 'NELSON FERREIRA MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/04/19',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 31,
            'NM_PSGR' => 'JOAQUIM VICENTE DE PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 32,
            'NM_PSGR' => 'JOSE FERREIRA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 33,
            'NM_PSGR' => 'MAURICIO BERNARDO CELESTIANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 34,
            'NM_PSGR' => 'APARECIDO DE PAULA LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 35,
            'NM_PSGR' => 'EDNALDO ROSA PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 36,
            'NM_PSGR' => 'WAGNER DE SOUZA GOUVEA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/10/04',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 37,
            'NM_PSGR' => 'RONEI CANCELA SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1945/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 38,
            'NM_PSGR' => 'JOSE PAULO NAVARRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1946/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 39,
            'NM_PSGR' => 'JOSE TEIXEIRA DO CARMO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1946/09/05',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 40,
            'NM_PSGR' => 'JOSE PAULO TOLENDAR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1946/04/02',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 41,
            'NM_PSGR' => 'JOSE ELIZEU CARAMEZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1946/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 42,
            'NM_PSGR' => 'PEDRO ANTONIO C. GENEROSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1946/12/22',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 43,
            'NM_PSGR' => 'ADELINO FRANCISCO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1946/06/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 44,
            'NM_PSGR' => 'IRACEMA DA BOA VIAGEM G. LEAL',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1947/10/14',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 45,
            'NM_PSGR' => 'JOAQUIM TIBURCIO A. JUNQUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1947/06/08',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 46,
            'NM_PSGR' => 'FERNANDO LUIZ LOPES LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1947/08/23',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 47,
            'NM_PSGR' => 'ILSON TEIXEIRA CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1947/06/08',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 48,
            'NM_PSGR' => 'MOZART DA CUNHA CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/01/16',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 49,
            'NM_PSGR' => 'JOAO FERREIRA MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/06/29',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 50,
            'NM_PSGR' => 'CESAR AUGUSTO FERES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/07/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 51,
            'NM_PSGR' => 'EDIO DE OLIVEIRA VIGILATO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 52,
            'NM_PSGR' => 'JOSE LUIZ SANTANA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/11/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 53,
            'NM_PSGR' => 'REGINA STELA ALMEIDA D MENDES',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1949/12/06',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 54,
            'NM_PSGR' => 'CELSO SARANDY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/01/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 55,
            'NM_PSGR' => 'ANTONIO CARLOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/01/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 56,
            'NM_PSGR' => 'JOSE CLAUDIO DE A. BISCOTTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/12/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 57,
            'NM_PSGR' => 'MESSIAS GUIMARAES LEMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/03/29',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 58,
            'NM_PSGR' => 'JOSE ARMANDO C DE ALBUQUERQUE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/05/24',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 59,
            'NM_PSGR' => 'DEMETRIO MACHADO DA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/07/31',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 60,
            'NM_PSGR' => 'JOSE RUBENS FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 61,
            'NM_PSGR' => 'GILBERTO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 62,
            'NM_PSGR' => 'ANTONIO LUIZ SOARES DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/03/01',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 63,
            'NM_PSGR' => 'JOAO DO CARMO VASCONCELOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/04/26',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 64,
            'NM_PSGR' => 'MARILCEIA TRINDADE MOREIRA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1949/11/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 65,
            'NM_PSGR' => 'GIOVANNI PEDRO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/07/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 66,
            'NM_PSGR' => 'HOMERO GOMES LEAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1949/07/23',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 67,
            'NM_PSGR' => 'JOAO BATISTA PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/02/28',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 68,
            'NM_PSGR' => 'FERNANDO GOMES MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/06/20',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 69,
            'NM_PSGR' => 'LUIZ ALBERTO PRADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 70,
            'NM_PSGR' => 'MARCIO ANTONIO AFLISIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/08/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 71,
            'NM_PSGR' => 'EDMILSON APARECIDO ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/09/12',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 72,
            'NM_PSGR' => 'PAULO ROBERTO QUETZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/11/07',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 73,
            'NM_PSGR' => 'EUFRAZIO CARVALHO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/03/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 74,
            'NM_PSGR' => 'FERNANDO GOMES MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/06/20',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 75,
            'NM_PSGR' => 'ANTONIO CARLOS SALVE DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/07/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 76,
            'NM_PSGR' => 'EUCELIO FELICIANO TORRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/01/02',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 77,
            'NM_PSGR' => 'MARIA DE FATIMA SALOMAO MUSSE',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1950/05/23',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 78,
            'NM_PSGR' => 'MARCOS OTTONI DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1950/05/27',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 79,
            'NM_PSGR' => 'JOSE FERREIRA FONTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/03/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 80,
            'NM_PSGR' => 'PAULO GOMES FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/03/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 81,
            'NM_PSGR' => 'GERALDO ANTONIO NOGUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/06/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 82,
            'NM_PSGR' => 'PLINIO SANT ANA VALLADAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/05/22',
            'CD_PAIS' => 'YU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 83,
            'NM_PSGR' => 'LIBANO JORGE ABJAUD',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/03/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 84,
            'NM_PSGR' => 'SIBELIUS MARTINS DAMASCENO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/04/24',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 85,
            'NM_PSGR' => 'PAULA RIBEIRO DINIZ',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1951/07/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 86,
            'NM_PSGR' => 'JOAO CARLOS FRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1951/12/04',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 87,
            'NM_PSGR' => 'JOSE AMARO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/02/02',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 88,
            'NM_PSGR' => 'GERALDO MARCIO AZALIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/02/02',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 89,
            'NM_PSGR' => 'GETULIO LOPES ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/02/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 90,
            'NM_PSGR' => 'JOSE JOAQUIM DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/02/14',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 91,
            'NM_PSGR' => 'JULIO CESAR DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/02/14',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 92,
            'NM_PSGR' => 'ANTONIO CLAUDINO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/02/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 93,
            'NM_PSGR' => 'ANTONIO JOSE GOMES DE FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 94,
            'NM_PSGR' => 'JORGE LUIZ NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 95,
            'NM_PSGR' => 'GILBERTO JARDIM F.DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 96,
            'NM_PSGR' => 'ANTONIO HENRIQUE F.ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 97,
            'NM_PSGR' => 'OTHON DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 98,
            'NM_PSGR' => 'MAURILIO NUNES DA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 99,
            'NM_PSGR' => 'FERNANDO LUIS F.ELIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 100,
            'NM_PSGR' => 'JOAO BATISTA CORREA DANIEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 101,
            'NM_PSGR' => 'LUIZ CARLOS A. GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/05/28',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 102,
            'NM_PSGR' => 'EXPEDITO VITORIO LEONEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/09/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 103,
            'NM_PSGR' => 'VANTUIL ANTONIO MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/12/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 104,
            'NM_PSGR' => 'FRANCISCO FACUNDO CANDEA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/12/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 105,
            'NM_PSGR' => 'KIYOO MUNAKATA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/12/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 106,
            'NM_PSGR' => 'LUIZ CARLOS DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/12/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 107,
            'NM_PSGR' => 'EDUARDO JOSE PIRES DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 108,
            'NM_PSGR' => 'ORLANDINO NASCIMENTO NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/08/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 109,
            'NM_PSGR' => 'RONALDO CASTRO MACIEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/12/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 110,
            'NM_PSGR' => 'SEBASTIAO MAURICIO A. SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/01/29',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 111,
            'NM_PSGR' => 'PAULO ROBERTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/08/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 112,
            'NM_PSGR' => 'LEOPOLDO LOPES TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/09/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 113,
            'NM_PSGR' => 'LUCIANO MAGNO VARGAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/10/07',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 114,
            'NM_PSGR' => 'GEISER COSTA SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1952/04/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 115,
            'NM_PSGR' => 'LUIZ CLAUDIO GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1953/06/16',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 116,
            'NM_PSGR' => 'JOSE ORLANDO DIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1953/07/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 117,
            'NM_PSGR' => 'RONALDO FRANCISCO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1953/08/11',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 118,
            'NM_PSGR' => 'SOKUCHIN UEHARA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1953/08/11',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 119,
            'NM_PSGR' => 'MARIO CESAR RADICH',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1953/12/29',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 120,
            'NM_PSGR' => 'MARIA DAS GRACAS LIMA NEHRER',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1953/07/18',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 121,
            'NM_PSGR' => 'JANIO DE PAULO CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1953/03/28',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 122,
            'NM_PSGR' => 'JOSE ANTONIO BENICA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/06/15',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 123,
            'NM_PSGR' => 'WILTON BARBOSA BITTENC LISBOA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/06/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 124,
            'NM_PSGR' => 'MARCIO LUIS MARTINS ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/08/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 125,
            'NM_PSGR' => 'OLIVIER QUEIROZ REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 126,
            'NM_PSGR' => 'VICENTE DE PAULA OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 127,
            'NM_PSGR' => 'JALMIR FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/09/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 128,
            'NM_PSGR' => 'ADMAR BALBINO DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/10/09',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 129,
            'NM_PSGR' => 'WALLACE DE ALEXANDRIA MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/10/09',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 130,
            'NM_PSGR' => 'FERNANDO DIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/10/09',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 131,
            'NM_PSGR' => 'AUGUSTO ROBERTO NUNES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/12/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 132,
            'NM_PSGR' => 'RONALDO ALVES SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/12/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 133,
            'NM_PSGR' => 'JOAO LUIZ NATIVIDADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/12/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 134,
            'NM_PSGR' => 'EFREM ANTONIO BURKOWSKI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/12/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 135,
            'NM_PSGR' => 'FERNANDO MAYO TOLEDO LUSARDI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 136,
            'NM_PSGR' => 'LUIZ CLAUDIO MAGALDI MEDEIROS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 137,
            'NM_PSGR' => 'JOSE ROBERTO ALVES FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1954/06/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 138,
            'NM_PSGR' => 'CARLOS ONOFRE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/01/25',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 139,
            'NM_PSGR' => 'JOSE GERALDO ZANETTI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/02/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 140,
            'NM_PSGR' => 'VICENTE FERREIRA DE O.FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/02/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 141,
            'NM_PSGR' => 'SIDNEI SANT ANNA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/03/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 142,
            'NM_PSGR' => 'SILVIO LUIZ DA NATIVIDADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/03/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 143,
            'NM_PSGR' => 'JORGE LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/04/03',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 144,
            'NM_PSGR' => 'ANDRE LUIZ DE F.S. PARENTONI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/04/19',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 145,
            'NM_PSGR' => 'WIRLEI DE SOUZA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/05/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 146,
            'NM_PSGR' => 'LUCIANO VIEIRA GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/05/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 147,
            'NM_PSGR' => 'GERALDO PACHECO MAGELA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/05/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 148,
            'NM_PSGR' => 'JOAO SEVERINO DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/05/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 149,
            'NM_PSGR' => 'ANTONIO CARLOS DE AREDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 150,
            'NM_PSGR' => 'ANTONIO GERALDO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/14',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 151,
            'NM_PSGR' => 'ANTONIO BARBOSA DE MELO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/14',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 152,
            'NM_PSGR' => 'WALDEMAR TADEU DUARTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 153,
            'NM_PSGR' => 'JOSE EUCLIDES DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/18',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 154,
            'NM_PSGR' => 'OSMAR BRASIL DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 155,
            'NM_PSGR' => 'VALDIR CORREA DUARTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/06/26',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 156,
            'NM_PSGR' => 'JOAO NICOLAU SANTANA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 157,
            'NM_PSGR' => 'JOSE GETULIO MALTA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/08/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 158,
            'NM_PSGR' => 'ANTONIO DOMINGOS BAIOCO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/08/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 159,
            'NM_PSGR' => 'ALUISIO CARBOGIM FAZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/08/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 160,
            'NM_PSGR' => 'PAULO CESAR ARMELONI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/08/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 161,
            'NM_PSGR' => 'MARCIO DE SOUZA FURTADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/08/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 162,
            'NM_PSGR' => 'ARI HENRIQUE PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/09/06',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 163,
            'NM_PSGR' => 'MARCOS ANTONIO UMBELINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/09/06',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 164,
            'NM_PSGR' => 'JOSE FERNANDO VASCONCELLOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/09/06',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 165,
            'NM_PSGR' => 'WALSEDISNEY JORGE CORNI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/10/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 166,
            'NM_PSGR' => 'ARLINDO CARDOSO CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/10/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 167,
            'NM_PSGR' => 'GILSON FERNANDES PATICCIE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/11/01',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 168,
            'NM_PSGR' => 'CARLOS ROBERTO MACIEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 169,
            'NM_PSGR' => 'VARLEN VIDAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 170,
            'NM_PSGR' => 'LUIZ ANTONIO LEITE BEZERRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 171,
            'NM_PSGR' => 'ROBERTO FLORES DOS RIOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 172,
            'NM_PSGR' => 'DANIEL LOURENCO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 173,
            'NM_PSGR' => 'DURVAL PINTO DE A. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 174,
            'NM_PSGR' => 'LUIZ ANTONIO SILVANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 175,
            'NM_PSGR' => 'LUIZ CARLOS BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 176,
            'NM_PSGR' => 'NOCY LUCAS DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 177,
            'NM_PSGR' => 'POTIGUARA GERALDO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 178,
            'NM_PSGR' => 'JOSE MAURICIO VIEIRA COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1955/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 179,
            'NM_PSGR' => 'CARLOS ROBERTO R ARRUDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/03/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 180,
            'NM_PSGR' => 'MARCIA RAIMUNDA C. PESSANHA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 181,
            'NM_PSGR' => 'LUIZ TECLI COPPE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/01/24',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 182,
            'NM_PSGR' => 'OTACILIO ANTONIO VIEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/02/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 183,
            'NM_PSGR' => 'PAULO RANGEL MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/02/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 184,
            'NM_PSGR' => 'NISIO DA COSTA GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/03/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 185,
            'NM_PSGR' => 'ARMANDO VICENTE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/03/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 186,
            'NM_PSGR' => 'EDIR MACHADO DE VASCONCELOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/03/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 187,
            'NM_PSGR' => 'ALFREDO ABUD NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/04/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 188,
            'NM_PSGR' => 'ELIO LAZARO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/04/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 189,
            'NM_PSGR' => 'MILTON LOPES DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/05/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 190,
            'NM_PSGR' => 'SEBASTIAO REZENDE DE CASTILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/06/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 191,
            'NM_PSGR' => 'HELIO FIDENCIO LINHARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/06/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 192,
            'NM_PSGR' => 'MARCOS AUGUSTO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/06/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 193,
            'NM_PSGR' => 'LUIZ FERNANDO DE MENDONCA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 194,
            'NM_PSGR' => 'MARSSAL VALENTIM VICTORINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 195,
            'NM_PSGR' => 'ROBSON FERREIRA MACIEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 196,
            'NM_PSGR' => 'AMARILDO FERNANDES PATICCIE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 197,
            'NM_PSGR' => 'MARCIO CESAR DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 198,
            'NM_PSGR' => 'FABIO MAXIMIANO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 199,
            'NM_PSGR' => 'HERCULES JOSE NOGUEIRA RAMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 200,
            'NM_PSGR' => 'ADASIO APARECIDO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 201,
            'NM_PSGR' => 'RENATO LUIZ SPINELLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/08/07',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 202,
            'NM_PSGR' => 'JOSE AVANIR RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/08/07',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 203,
            'NM_PSGR' => 'NEVADIR RODRIGUES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/08/07',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 204,
            'NM_PSGR' => 'JOSE AFONSO CARBOGIM BASSOLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/08/07',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 205,
            'NM_PSGR' => 'LUIZ ANTONIO SOUZA DE AVELAR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 206,
            'NM_PSGR' => 'CARLOS ALBERTO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 207,
            'NM_PSGR' => 'LUIZ ELIAS DE MENDONCA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 208,
            'NM_PSGR' => 'KLEBER DE OLIVEIRA RESENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 209,
            'NM_PSGR' => 'MAURICIO DA CONCEICAO CORREA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 210,
            'NM_PSGR' => 'ANTONIO SILVERIO MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 211,
            'NM_PSGR' => 'OSVALDO SEVERINO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/09/04',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 212,
            'NM_PSGR' => 'JOSE DJALMA MADEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/10/02',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 213,
            'NM_PSGR' => 'FERNANDO LUIZ JANUZZI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 214,
            'NM_PSGR' => 'TARCISIO GOMES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 215,
            'NM_PSGR' => 'MARIO JOSE DE AVILA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 216,
            'NM_PSGR' => 'CELSO MARTINS DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 217,
            'NM_PSGR' => 'ANTONIO MANOEL PAES MARTINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 218,
            'NM_PSGR' => 'ANTONIO MARCOS DO A GAMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 219,
            'NM_PSGR' => 'TADEU AUGUSTO G. DA SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 220,
            'NM_PSGR' => 'ANTONIO MATHEUS M DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 221,
            'NM_PSGR' => 'EDER APARECIDO DORNELAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 222,
            'NM_PSGR' => 'ALVARO SOARES RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 223,
            'NM_PSGR' => 'GERALDO DIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 224,
            'NM_PSGR' => 'PEDRO GERVASIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 225,
            'NM_PSGR' => 'JOAO BATISTA DE O MONTEZANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 226,
            'NM_PSGR' => 'ARLINDO DE SOUZA SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/06/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 227,
            'NM_PSGR' => 'ANTONIO ROBERTO N. MOURA DIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/08/07',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 228,
            'NM_PSGR' => 'JOAQUIM CARLOS A. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 229,
            'NM_PSGR' => 'SAMIR HETTI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 230,
            'NM_PSGR' => 'MIGUEL CAETANO DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1956/10/02',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 231,
            'NM_PSGR' => 'ANA ELIZA DE SIQUEIRA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 232,
            'NM_PSGR' => 'HUMBERTO DE SA NERY',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1957/04/16',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 233,
            'NM_PSGR' => 'EDUARDO KNEIPP DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 234,
            'NM_PSGR' => 'GERALDO MAURICIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 235,
            'NM_PSGR' => 'ROBERTO DE BRITO CORNELIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 236,
            'NM_PSGR' => 'CLAUDIO MAURICIO AVELINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 237,
            'NM_PSGR' => 'JOSE AMANCIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 238,
            'NM_PSGR' => 'WALDIR APARECIDO DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 239,
            'NM_PSGR' => 'GERALDO EZEQUIEL SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 240,
            'NM_PSGR' => 'JOSE MAURICIO ARAUJO LAGE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 241,
            'NM_PSGR' => 'JOAO BATISTA DE ALMEIDA NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 242,
            'NM_PSGR' => 'AVIMAR FONSECA AMARAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 243,
            'NM_PSGR' => 'JOSE ROBERTO PINTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 244,
            'NM_PSGR' => 'GILSON BAESSA RISPOLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 245,
            'NM_PSGR' => 'RONALDO ANTUNES TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 246,
            'NM_PSGR' => 'JOSE MIGUEL DA COSTA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/02/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 247,
            'NM_PSGR' => 'JOSE TADEU FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 248,
            'NM_PSGR' => 'JOSE MARCOS NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 249,
            'NM_PSGR' => 'LOURIVAL DAS GRACAS GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 250,
            'NM_PSGR' => 'JOSE GERALDO MOTTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 251,
            'NM_PSGR' => 'LUCIO LUCAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 252,
            'NM_PSGR' => 'ANDERSON ANTONIO DE C. REZENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 253,
            'NM_PSGR' => 'GETULIO ROCHA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/04/16',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 254,
            'NM_PSGR' => 'ARTHUR BERNARDO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/04/16',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 255,
            'NM_PSGR' => 'JOSE GERALDO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/04/16',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 256,
            'NM_PSGR' => 'CELSO FERNANDO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/05/14',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 257,
            'NM_PSGR' => 'JESUS VENANCIO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/05/14',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 258,
            'NM_PSGR' => 'MARCO ANTONIO AQUINO OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/05/14',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 259,
            'NM_PSGR' => 'ANTONIO CARLOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/05/14',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 260,
            'NM_PSGR' => 'LUCIO PIRES MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 261,
            'NM_PSGR' => 'WELLINGTON DA CONSOLACAO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 262,
            'NM_PSGR' => 'NILSON DE ALMEIDA MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 263,
            'NM_PSGR' => 'VICENTE DE PAULA GARCIA ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 264,
            'NM_PSGR' => 'JOSE CARLOS DOS REIS ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 265,
            'NM_PSGR' => 'AQUINO DA SILVA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 266,
            'NM_PSGR' => 'ANTONIO ALVES NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 267,
            'NM_PSGR' => 'ADAIR MARQUES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 268,
            'NM_PSGR' => 'LUIZ CARLOS PINHEIRO PRIOSTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/06/19',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 269,
            'NM_PSGR' => 'JOSE CARLOS DE ANDRADE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 270,
            'NM_PSGR' => 'PAULO DAGUIAR SILVA CERTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 271,
            'NM_PSGR' => 'ROBERTO ADAO MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 272,
            'NM_PSGR' => 'SERGIO DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 273,
            'NM_PSGR' => 'DARCI ROBERTO FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 274,
            'NM_PSGR' => 'ROBERTO DIONISIO FRANCISCO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 275,
            'NM_PSGR' => 'SERGIO LUIZ TAVARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 276,
            'NM_PSGR' => 'PERCINVAL DA COSTA BARREIROS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 277,
            'NM_PSGR' => 'OSWALDO GONCALVES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 278,
            'NM_PSGR' => 'PAULO ROBERTO P. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 279,
            'NM_PSGR' => 'RAIMUNDO VALDEMAR DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/09/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 280,
            'NM_PSGR' => 'JOAO SEBASTIAO F. DE MELO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/09/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 281,
            'NM_PSGR' => 'JOSE MARIA FELIX',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/09/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 282,
            'NM_PSGR' => 'PAULO CESAR OUVERNEY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 283,
            'NM_PSGR' => 'MARIO MINOLU ODA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 284,
            'NM_PSGR' => 'PAULO SOUZA DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 285,
            'NM_PSGR' => 'JOSE GERALDO DE MENDONCA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 286,
            'NM_PSGR' => 'ANTONIO PAULO DIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 287,
            'NM_PSGR' => 'ANTONIO CARLOS DE FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 288,
            'NM_PSGR' => 'CELIO RIBEIRO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 289,
            'NM_PSGR' => 'MILTON DE SOUZA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 290,
            'NM_PSGR' => 'GERALDO MAGELA LONDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 291,
            'NM_PSGR' => 'VENICIO MARTINS NAZARETH',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 292,
            'NM_PSGR' => 'SEBASTIAO AMORIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/29',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 293,
            'NM_PSGR' => 'LUCIO CARLOS DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 294,
            'NM_PSGR' => 'LEVY CARVALHO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 295,
            'NM_PSGR' => 'LUISMAR DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 296,
            'NM_PSGR' => 'JOSE ESTEVAO DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 297,
            'NM_PSGR' => 'SEBASTIAO CELIO PARO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 298,
            'NM_PSGR' => 'SEBASTIAO BATISTA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 299,
            'NM_PSGR' => 'MARCO AURELIO MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/11/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 300,
            'NM_PSGR' => 'WANDERLEI LUIZ CALIXTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/12/24',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 301,
            'NM_PSGR' => 'PAULO CESAR DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/12/24',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 302,
            'NM_PSGR' => 'CASSIO LUIZ ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/12/24',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 303,
            'NM_PSGR' => 'RENATO ANTONIO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/12/24',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 304,
            'NM_PSGR' => 'CARLOS ARNOBIO DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/12/28',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 305,
            'NM_PSGR' => 'JOSE OSCAR ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/12/28',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 306,
            'NM_PSGR' => 'VICTOR HENRIQUE C. DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 307,
            'NM_PSGR' => 'LUIZ CARLOS FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 308,
            'NM_PSGR' => 'WANDERSON LUIZ QUINELATO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/05/14',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 309,
            'NM_PSGR' => 'AILTON TAVELLA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 310,
            'NM_PSGR' => 'CARLOS HENRIQUE DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1957/10/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 311,
            'NM_PSGR' => 'FRANCISCO LOURENCO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/03/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 312,
            'NM_PSGR' => 'PAULO ROBERTO VALLE NERY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 313,
            'NM_PSGR' => 'GERALDO LUIZ PESSOA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 314,
            'NM_PSGR' => 'ANTONIO BARREIROS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 315,
            'NM_PSGR' => 'MARCELO MONTEIRO VIANNA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 316,
            'NM_PSGR' => 'RONAN VALAMIEL DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/01/21',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 317,
            'NM_PSGR' => 'JULIO CESAR JANUZZI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/01/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 318,
            'NM_PSGR' => 'PEDRO ROCHA VIEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/01/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 319,
            'NM_PSGR' => 'EXPEDITO FABIANO DA C. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/01/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 320,
            'NM_PSGR' => 'EUSTAQUIO ELEUTERIO FIGUEIREDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/01/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 321,
            'NM_PSGR' => 'MAURILIO SEBASTIAO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 322,
            'NM_PSGR' => 'FRANCISCO DE ASSIS R. MAIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 323,
            'NM_PSGR' => 'ADALTON DA SILVA RAMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 324,
            'NM_PSGR' => 'ADELIO DA SILVA GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 325,
            'NM_PSGR' => 'GILSON PAULO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 326,
            'NM_PSGR' => 'MAURILIO SANTOS OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 327,
            'NM_PSGR' => 'ANTONIO DE MELLO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 328,
            'NM_PSGR' => 'LUIZ GONZAGA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 329,
            'NM_PSGR' => 'GERALDO GONCALVES RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 330,
            'NM_PSGR' => 'FRANCISCO RODRIGUES FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 331,
            'NM_PSGR' => 'PAULO RODRIGUES DE MIRANDA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1958/03/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 332,
            'NM_PSGR' => 'PAULO ROBERTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/03/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 333,
            'NM_PSGR' => 'LUIZ ANGELO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/03/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 334,
            'NM_PSGR' => 'ANTONIO DELPENHO F. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/03/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 335,
            'NM_PSGR' => 'JOSE MARIA DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/03/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 336,
            'NM_PSGR' => 'JOSE COSTA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 337,
            'NM_PSGR' => 'JOSE MARIA ANGELO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 338,
            'NM_PSGR' => 'JOAQUIM ALVES SOBRINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 339,
            'NM_PSGR' => 'FLAVIO LOPES RAMALHO NOVAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 340,
            'NM_PSGR' => 'ANTONIO GUEDES MIQUELINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 341,
            'NM_PSGR' => 'GERALDO CESAR P DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 342,
            'NM_PSGR' => 'ROMILDO MARTINS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 343,
            'NM_PSGR' => 'BENEDITO ASSIS DE VASCONCELOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 344,
            'NM_PSGR' => 'JOSE GONCALVES PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 345,
            'NM_PSGR' => 'ANTONIO GONCALVES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 346,
            'NM_PSGR' => 'LEONIDAS CARVALHO BIGNOTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 347,
            'NM_PSGR' => 'MARCO ANTERO MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/04/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 348,
            'NM_PSGR' => 'ALOISIO ARANTES GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/05/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 349,
            'NM_PSGR' => 'MAURICIO DIEGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/05/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 350,
            'NM_PSGR' => 'PAULO AFFONSO BIZAGGIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/05/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 351,
            'NM_PSGR' => 'NILDSON SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/05/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 352,
            'NM_PSGR' => 'WILSON RIBEIRO DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/05/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 353,
            'NM_PSGR' => 'JOAO JOSE DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 354,
            'NM_PSGR' => 'AMARILDO GALDINO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 355,
            'NM_PSGR' => 'MARCELINO PIMENTEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 356,
            'NM_PSGR' => 'MARIO LUCIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 357,
            'NM_PSGR' => 'ANTONIO DE PADUA DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 358,
            'NM_PSGR' => 'JOSE GERALDO QUETZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 359,
            'NM_PSGR' => 'JOSE LUIZ SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 360,
            'NM_PSGR' => 'PEDRO CESAR SINHOROTO MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 361,
            'NM_PSGR' => 'MARCIO LOPES DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 362,
            'NM_PSGR' => 'CARLOS ALBERTO FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 363,
            'NM_PSGR' => 'CARLOS AUGUSTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 364,
            'NM_PSGR' => 'CARLOS PINTO SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 365,
            'NM_PSGR' => 'MARCIO LUIZ VARGAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 366,
            'NM_PSGR' => 'ISRAEL ASSUNCAO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/08/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 367,
            'NM_PSGR' => 'JOAO OCALINO MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 368,
            'NM_PSGR' => 'ROBERTO COUTINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 369,
            'NM_PSGR' => 'SEBASTIAO MORAIS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 370,
            'NM_PSGR' => 'CARLOS MIRANDA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 371,
            'NM_PSGR' => 'ALOISIO CARLOS SALLES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 372,
            'NM_PSGR' => 'JOSE EFIGENIO DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 373,
            'NM_PSGR' => 'CARLOS ALBERTO AMBROSIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 374,
            'NM_PSGR' => 'JOSE RAIMUNDO PINTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 375,
            'NM_PSGR' => 'JOSE RUFINO BATISTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 376,
            'NM_PSGR' => 'CARLOS VENTURA AMBROSIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 377,
            'NM_PSGR' => 'PAULO ROBERTO ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 378,
            'NM_PSGR' => 'CLAUDIO CARVALHO CUNHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 379,
            'NM_PSGR' => 'JORGE WILLANS G. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 380,
            'NM_PSGR' => 'JOSE ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/01',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 381,
            'NM_PSGR' => 'CARLOS GALHARDO MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/01',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 382,
            'NM_PSGR' => 'EDISON JACY DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/01',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 383,
            'NM_PSGR' => 'JOSE CARLOS BASTOS DE MORAIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 384,
            'NM_PSGR' => 'LUIZ CARLOS RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 385,
            'NM_PSGR' => 'MARCIO DA SILVA XAVIER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 386,
            'NM_PSGR' => 'LUIZ LUCAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 387,
            'NM_PSGR' => 'LUIS CLAUDIO NOVAES MATOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 388,
            'NM_PSGR' => 'NELSON GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 389,
            'NM_PSGR' => 'JOAO BATISTA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 390,
            'NM_PSGR' => 'JOAO GARCIA DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 391,
            'NM_PSGR' => 'PAULO ROBERTO SCORALICK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 392,
            'NM_PSGR' => 'SEBASTIAO JOAQUIM DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 393,
            'NM_PSGR' => 'ANTONIO TRAJANO RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/11/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 394,
            'NM_PSGR' => 'LUIZ DE SOUZA P. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/03',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 395,
            'NM_PSGR' => 'NIVALDINO LUIZ DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 396,
            'NM_PSGR' => 'GERALDO TRINDADE DE PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 397,
            'NM_PSGR' => 'CLAUDIO JORGE LUCIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 398,
            'NM_PSGR' => 'JOAO LUCAS DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 399,
            'NM_PSGR' => 'AYLTON DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 400,
            'NM_PSGR' => 'MARCOS CARNEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 401,
            'NM_PSGR' => 'JOSE LUIZ SPERANDIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 402,
            'NM_PSGR' => 'IVO JOSE DANTAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 403,
            'NM_PSGR' => 'LUIZ CARLOS MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/12/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 404,
            'NM_PSGR' => 'JOSE MARIA ALVES GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 405,
            'NM_PSGR' => 'WILSON VASCONCELOS DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/02/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 406,
            'NM_PSGR' => 'GERALDO AFONSO ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1958/03/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 407,
            'NM_PSGR' => 'TEREZINHA MARIA T. REBOUCAS',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1958/07/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 408,
            'NM_PSGR' => 'IVANIA MARIA ANDRADE CESARINI',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1958/08/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 409,
            'NM_PSGR' => 'ANGELA BEATRIZ NAZARENO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1959/09/05',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 410,
            'NM_PSGR' => 'JORGE EUSTAQUIO HEREDIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 411,
            'NM_PSGR' => 'LUIZ MARCELO AUGUSTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 412,
            'NM_PSGR' => 'RICARDO SOARES RIBEIRO PINTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/01/20',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 413,
            'NM_PSGR' => 'MARCIO LUIZ TOSTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/01/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 414,
            'NM_PSGR' => 'MAURICIO DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 415,
            'NM_PSGR' => 'PEDRO CORREA PINTO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 416,
            'NM_PSGR' => 'PAULO VIDAL DE ALCANTARA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 417,
            'NM_PSGR' => 'DOMICIANO BERTANTE DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 418,
            'NM_PSGR' => 'JOSE MARIA PIMENTEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 419,
            'NM_PSGR' => 'GERALDO SOTERO LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 420,
            'NM_PSGR' => 'JOSE CARLOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 421,
            'NM_PSGR' => 'SERGIO LUIZ GUEDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 422,
            'NM_PSGR' => 'NILSON MARY DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 423,
            'NM_PSGR' => 'ANTONIO CARLOS M. DE AZEVEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 424,
            'NM_PSGR' => 'JOSE FERREIRA LAVECCHIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 425,
            'NM_PSGR' => 'FRANCISCO CARLOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 426,
            'NM_PSGR' => 'IVAIR CESARIO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 427,
            'NM_PSGR' => 'LUIZ CARLOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 428,
            'NM_PSGR' => 'MARCIO ANTONIO AFFONSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 429,
            'NM_PSGR' => 'JOSE ROMERO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/03/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 430,
            'NM_PSGR' => 'APARECIDO VENTURA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 431,
            'NM_PSGR' => 'ALTAMIRO GERALDO DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 432,
            'NM_PSGR' => 'AUGUSTO MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 433,
            'NM_PSGR' => 'ADEIR CONCEICAO SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 434,
            'NM_PSGR' => 'RONALDO CAMPOS PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 435,
            'NM_PSGR' => 'MEM DE SA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 436,
            'NM_PSGR' => 'ORLANDO DE SOUZA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 437,
            'NM_PSGR' => 'GERALDO FRANCISCO PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 438,
            'NM_PSGR' => 'JOSE MARIA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 439,
            'NM_PSGR' => 'JAIR DE ANDRADE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 440,
            'NM_PSGR' => 'OTACILIO PAULINO DA MOTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 441,
            'NM_PSGR' => 'JOSE DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 442,
            'NM_PSGR' => 'ANTONIO CELESTINO AFONSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 443,
            'NM_PSGR' => 'PAULO ROBERTO F. DE AZEVEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 444,
            'NM_PSGR' => 'NELSON TEIXEIRA DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 445,
            'NM_PSGR' => 'SEBASTIAO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 446,
            'NM_PSGR' => 'LUIZ APARECIDO GARCIA ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 447,
            'NM_PSGR' => 'PAULO HENRIQUE LEONEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/06/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 448,
            'NM_PSGR' => 'NILSON FONSECA MIGUEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/06/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 449,
            'NM_PSGR' => 'ELMO RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/06/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 450,
            'NM_PSGR' => 'DECIO MOREIRA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/06/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 451,
            'NM_PSGR' => 'JAQUES NETO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/06/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 452,
            'NM_PSGR' => 'JOSE LOURENCO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/07/07',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 453,
            'NM_PSGR' => 'ANTORILDO LADISLAU',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/07/07',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 454,
            'NM_PSGR' => 'PAULO RUBENS VICTORIO COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/07/07',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 455,
            'NM_PSGR' => 'JOSE MARIA DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/07/07',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 456,
            'NM_PSGR' => 'JOAO GERALDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 457,
            'NM_PSGR' => 'AILTON DE SOUZA XAVIER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 458,
            'NM_PSGR' => 'IVAIR LEOPOLDINO DE MEIRELES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 459,
            'NM_PSGR' => 'JOSE VICENTE TEIXEIRA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 460,
            'NM_PSGR' => 'EDSON BRASIL DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 461,
            'NM_PSGR' => 'FRANCISCO XAVIER LAINA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 462,
            'NM_PSGR' => 'CESAR ALENCAR RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 463,
            'NM_PSGR' => 'HELIO ALVIM FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/05',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 464,
            'NM_PSGR' => 'DIVINO ARRUDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/05',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 465,
            'NM_PSGR' => 'JOSE FRANCISCO DE MELO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/05',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 466,
            'NM_PSGR' => 'EDSON ALVES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/05',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 467,
            'NM_PSGR' => 'JOAO TIAGO NORATO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/29',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 468,
            'NM_PSGR' => 'GILSON OSMAR FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/29',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 469,
            'NM_PSGR' => 'JOSE CORREA NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/09/29',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 470,
            'NM_PSGR' => 'PAULO CESAR PECIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 471,
            'NM_PSGR' => 'EDUARDO MARTINS NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 472,
            'NM_PSGR' => 'LUIZ CARLOS DE ASSIS CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 473,
            'NM_PSGR' => 'JOSE FIRMINO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 474,
            'NM_PSGR' => 'GERALDINO DE MORAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 475,
            'NM_PSGR' => 'MARCELO REGINALDO DE LOUREIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 476,
            'NM_PSGR' => 'AMAURI MARCOS RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 477,
            'NM_PSGR' => 'NIVEO ANTONIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 478,
            'NM_PSGR' => 'ALMIR MACIEL FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/10/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 479,
            'NM_PSGR' => 'JOAO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 480,
            'NM_PSGR' => 'HELIO TEIXEIRA PINTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 481,
            'NM_PSGR' => 'ANTONIO CARLOS PRIAMO BELLEI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 482,
            'NM_PSGR' => 'JOSE ANTONIO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 483,
            'NM_PSGR' => 'ANTONIO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 484,
            'NM_PSGR' => 'ADILSON DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 485,
            'NM_PSGR' => 'CARLOS ALBERTO DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/11/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 486,
            'NM_PSGR' => 'JOAO LUIZ DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 487,
            'NM_PSGR' => 'JORGE MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 488,
            'NM_PSGR' => 'ISRAEL JOSE COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 489,
            'NM_PSGR' => 'SERGIO JUSTINIANO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 490,
            'NM_PSGR' => 'WANDERLEI JORGE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 491,
            'NM_PSGR' => 'ANDRE LUIZ FERREIRA DE S. ANNA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/12/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 492,
            'NM_PSGR' => 'SILVIO ROMERO DA SILVA GUEDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/01/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 493,
            'NM_PSGR' => 'RENATO JOSE DE OLIVEIRA MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 494,
            'NM_PSGR' => 'MARCOS BENITEZ DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/05/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 495,
            'NM_PSGR' => 'JOSE EDUARDO PENNA BASTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 496,
            'NM_PSGR' => 'LAERCIO PERON MACIEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/01/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 497,
            'NM_PSGR' => 'LUIZ ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 498,
            'NM_PSGR' => 'EDMILSON GOMES BARRETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/02/17',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 499,
            'NM_PSGR' => 'DUARTE MARCELINO LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/07/07',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 500,
            'NM_PSGR' => 'JOSE HENRIQUE DE O. VIEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1959/04/14',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 501,
            'NM_PSGR' => 'GLORIA MARIA DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1959/08/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 502,
            'NM_PSGR' => 'EDSON ROBERTO BELIGOLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/09/15',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 503,
            'NM_PSGR' => 'SIDNEY APARECIDO DE O. GUERRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/09/15',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 504,
            'NM_PSGR' => 'VALDEMAR CAMPOS SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 505,
            'NM_PSGR' => 'LUIZ ANTONIO AUGUSTO DUQUE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 506,
            'NM_PSGR' => 'VALDIR DIAS PINTO P. JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 507,
            'NM_PSGR' => 'MAURICIO GLICERIO BONFIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 508,
            'NM_PSGR' => 'EDUARDO LUIZ FERREIRA FONSECA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/16',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 509,
            'NM_PSGR' => 'GILBERTO MANSUR MAKLA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/16',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 510,
            'NM_PSGR' => 'FRANCISCO CARLOS XAVIER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/16',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 511,
            'NM_PSGR' => 'EDIR JOSE PENA GONCALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/16',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 512,
            'NM_PSGR' => 'VANDERLEI DORNELAS TOMAZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 513,
            'NM_PSGR' => 'VALDIR EVANGELISTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 514,
            'NM_PSGR' => 'ARY BARBOSA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 515,
            'NM_PSGR' => 'IVAM ROMUALDO DE AQUINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 516,
            'NM_PSGR' => 'JOSIMAR BERNARDINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 517,
            'NM_PSGR' => 'MILTON COUTINHO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 518,
            'NM_PSGR' => 'FRANCISCO CARLOS S. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 519,
            'NM_PSGR' => 'ANTONIO TADEU DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 520,
            'NM_PSGR' => 'JOAO BATISTA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 521,
            'NM_PSGR' => 'ANTONIO BAPTISTA DA S.SOBRINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 522,
            'NM_PSGR' => 'ANTONIO CARLOS GONCALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 523,
            'NM_PSGR' => 'CARLOS ANGELO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 524,
            'NM_PSGR' => 'FERNANDO ANTONIO B.MAGALHAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 525,
            'NM_PSGR' => 'JOAO BATISTA NEVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 526,
            'NM_PSGR' => 'CLOVES ANTONIO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/05/10',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 527,
            'NM_PSGR' => 'JOSE CARLOS SILVEIRA BOTELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/05/10',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 528,
            'NM_PSGR' => 'WALTER ANTONIO COIMBRA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/05/10',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 529,
            'NM_PSGR' => 'LUIZ ANTONIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/05/10',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 530,
            'NM_PSGR' => 'JOSE DA SILVA ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/06/07',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 531,
            'NM_PSGR' => 'LUIZ CARLOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/07/05',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 532,
            'NM_PSGR' => 'JOSE ANTONIO SANTOS PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/07/05',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 533,
            'NM_PSGR' => 'MAURICIO LEONEL LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 534,
            'NM_PSGR' => 'ELIEZER RIOS PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/08/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 535,
            'NM_PSGR' => 'FRONTINO LOPES TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/08/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 536,
            'NM_PSGR' => 'CARLOS CEDRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/09/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 537,
            'NM_PSGR' => 'PAULO FRANCISCO R. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/11/30',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 538,
            'NM_PSGR' => 'JOSE CHAVES JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/11/30',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 539,
            'NM_PSGR' => 'CELIO REINALDO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/12/20',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 540,
            'NM_PSGR' => 'ANTONIO VIEIRA RODRIGUES FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/06/15',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 541,
            'NM_PSGR' => 'NELSON JOSE VIEIRA DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1960/02/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 542,
            'NM_PSGR' => 'HELEUSES CORREA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1960/05/10',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 543,
            'NM_PSGR' => 'ARIOVALDO DELGADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/02/14',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 544,
            'NM_PSGR' => 'MARCELO CORTES REGADAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/05/09',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 545,
            'NM_PSGR' => 'JOAO RICARDO F. DO VALLE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 546,
            'NM_PSGR' => 'MARILENE RANGEL',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1961/08/29',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 547,
            'NM_PSGR' => 'JOSE OCTAVIO MATOZINHOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/12/19',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 548,
            'NM_PSGR' => 'NILSON VICENTE SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/01/17',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 549,
            'NM_PSGR' => 'SEBASTIAO GONCALVES FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/01/17',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 550,
            'NM_PSGR' => 'RONALDO RODRIGUES DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/01/17',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 551,
            'NM_PSGR' => 'JOSE MARIA BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/01/17',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 552,
            'NM_PSGR' => 'MARCIO MENDES GENILHU',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/01/17',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 553,
            'NM_PSGR' => 'MOACIR ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/03/30',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 554,
            'NM_PSGR' => 'WAGNER MENDES RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/03/30',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 555,
            'NM_PSGR' => 'MARCELO DE SOUZA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/04/03',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 556,
            'NM_PSGR' => 'PAULO JOSE GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/04/11',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 557,
            'NM_PSGR' => 'JOAO CARLOS DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/05/09',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 558,
            'NM_PSGR' => 'LUIZ GONZAGA DE CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/06/18',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 559,
            'NM_PSGR' => 'GIL AURELIO BENTO RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/06/18',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 560,
            'NM_PSGR' => 'MARCIO ANGELO DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/08/29',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 561,
            'NM_PSGR' => 'MARCIO REZENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/08/29',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 562,
            'NM_PSGR' => 'JOAO BOSCO LOURENCO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/08/29',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 563,
            'NM_PSGR' => 'JOSE MEIRELES FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/09/26',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 564,
            'NM_PSGR' => 'DANIEL VAZ DA FONSECA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/10/24',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 565,
            'NM_PSGR' => 'LAUDELINO ZEFERINO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/10/24',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 566,
            'NM_PSGR' => 'NIVALDO JOSE BATISTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 567,
            'NM_PSGR' => 'MARIZA ROCHA LIMA DE HOLLANDA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1961/01/17',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 568,
            'NM_PSGR' => 'LUIZ ALEXANDRE DOMITH',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/02/14',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 569,
            'NM_PSGR' => 'MARIO LUIS DE SOUSA BOMFIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/03/30',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 570,
            'NM_PSGR' => 'EVANDRO CASIMIRO JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/04/11',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 571,
            'NM_PSGR' => 'AMAURI MENDES ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1961/01/25',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 572,
            'NM_PSGR' => 'JOSE ANTONIO LEAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 573,
            'NM_PSGR' => 'HAMILTON BALTAZAR DA NOBREGA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/01/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 574,
            'NM_PSGR' => 'ANIZIO DIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/01/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 575,
            'NM_PSGR' => 'RUI CESAR FARIAS DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 576,
            'NM_PSGR' => 'JOSEMIR SEBASTIAO PIMENTEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/01/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 577,
            'NM_PSGR' => 'FRANCISCO DE PAULA ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/01/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 578,
            'NM_PSGR' => 'ANDRE LUIZ DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/01/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 579,
            'NM_PSGR' => 'GABRIEL SENNA DE PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 580,
            'NM_PSGR' => 'FRANCISCO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 581,
            'NM_PSGR' => 'JORGE LUIS DE AQUINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/05/08',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 582,
            'NM_PSGR' => 'RICARDO BRAZ FONSECA DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/07/03',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 583,
            'NM_PSGR' => 'WALTER PEREIRA RAMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/07/31',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 584,
            'NM_PSGR' => 'ANDERSON LUIZ PINTO DA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/08/28',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 585,
            'NM_PSGR' => 'MARIO MESSIAS BASTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/11/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 586,
            'NM_PSGR' => 'JOSE HIDERALDO SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/12/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 587,
            'NM_PSGR' => 'MARCONDES ANTINOPOL.DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 588,
            'NM_PSGR' => 'JOSE GERALDO CASTRO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/06/05',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 589,
            'NM_PSGR' => 'JOSE EDUARDO DE CASTRO BIANCHI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/12/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 590,
            'NM_PSGR' => 'SCYLLAS CANDIDO S. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/12/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 591,
            'NM_PSGR' => 'ADINALDO FERREIRA NG',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/09/01',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 592,
            'NM_PSGR' => 'GERALDO AGOSTINHO NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 593,
            'NM_PSGR' => 'RENAN RIBEIRO VARANDAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 594,
            'NM_PSGR' => 'CARLOS ALBERTO R. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 595,
            'NM_PSGR' => 'MAGNO ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 596,
            'NM_PSGR' => 'AFRANIO TRINDADE JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/04/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 597,
            'NM_PSGR' => 'PAULO FERNANDO TEIXEIRA SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/07/03',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 598,
            'NM_PSGR' => 'JOSE ROBERTO DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/05/08',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 599,
            'NM_PSGR' => 'WALTER PINTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1962/02/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 600,
            'NM_PSGR' => 'NESTOR AUGUSTO DE S. BAPTISTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/04/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 601,
            'NM_PSGR' => 'MARCELO DE PAIVA MACEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/04/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 602,
            'NM_PSGR' => 'AXEL ELIEZER STEIN',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/05/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 603,
            'NM_PSGR' => 'ACACIO RIBEIRO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/06/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 604,
            'NM_PSGR' => 'ELDER SANTOS BARINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/09/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 605,
            'NM_PSGR' => 'GUMERCINO SOARES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/09/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 606,
            'NM_PSGR' => 'DOMINGOS SAVIO V. SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/09/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 607,
            'NM_PSGR' => 'LUCIANO DO CARMO DA SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/09/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 608,
            'NM_PSGR' => 'GERALDO AURELIO TOLENTINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/10/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 609,
            'NM_PSGR' => 'HELDER MAIA DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/10/22',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 610,
            'NM_PSGR' => 'HUMBERTO MACHADO DA FONSECA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1963/11/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 611,
            'NM_PSGR' => 'MILTON FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 612,
            'NM_PSGR' => 'ELTON FERREIRA MACIEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/12/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 613,
            'NM_PSGR' => 'GERALDO C. DA SILVA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/12/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 614,
            'NM_PSGR' => 'ISMAEL PINTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/12/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 615,
            'NM_PSGR' => 'MARIA DE FATIMA A. CANDIDO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1963/01/15',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 616,
            'NM_PSGR' => 'JOSE LEOPOLDO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/01/15',
            'CD_PAIS' => 'LB',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 617,
            'NM_PSGR' => 'SERGIO RICARDO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/01/15',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 618,
            'NM_PSGR' => 'JOSE FRANCISCO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/10/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 619,
            'NM_PSGR' => 'ANTONIO FABIANO BARRA PORTES',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1963/06/04',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 620,
            'NM_PSGR' => 'JOSE FRANCISCO VITALE MURIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1963/08/27',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 621,
            'NM_PSGR' => 'CARLOS ALBERTO COSTA DINIZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 622,
            'NM_PSGR' => 'NISIO GLANZMANN JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/01/14',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 623,
            'NM_PSGR' => 'SAULO TEIXEIRA COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/01/14',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 624,
            'NM_PSGR' => 'GERALDO LUIZ PEREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/04/07',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 625,
            'NM_PSGR' => 'EDMAR MACHADO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/05/05',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 626,
            'NM_PSGR' => 'JOSE DIAS SOBRINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/06/02',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 627,
            'NM_PSGR' => 'ANTONIO CARLOS FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 628,
            'NM_PSGR' => 'IRINEU BATISTA LANDIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 629,
            'NM_PSGR' => 'AURELIO JOSE CANDIDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 630,
            'NM_PSGR' => 'DELQUIDES JOSE SOARES FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 631,
            'NM_PSGR' => 'JOSE ANTONIO DOS R. FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 632,
            'NM_PSGR' => 'JURANDY CAVANELLAS NEDER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 633,
            'NM_PSGR' => 'OSVAIR ANTONIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/08/25',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 634,
            'NM_PSGR' => 'ANTONIO DE OLIVEIRA SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/08/25',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 635,
            'NM_PSGR' => 'ANSELMO VIEIRA BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/09/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 636,
            'NM_PSGR' => 'NELSON BOLOTARI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/09/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 637,
            'NM_PSGR' => 'AFONSO RIBEIRO DINIZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/01',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 638,
            'NM_PSGR' => 'PAULO ROBERTO AUGUSTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 639,
            'NM_PSGR' => 'HILDEBRANDO ROSA NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 640,
            'NM_PSGR' => 'PAULO ONOFRE DIAS LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 641,
            'NM_PSGR' => 'WILSON MENDES OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 642,
            'NM_PSGR' => 'MARCOS ANTONIO ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 643,
            'NM_PSGR' => 'ODAIR TOSTES DE DEUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 644,
            'NM_PSGR' => 'FABIO ALVES DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 645,
            'NM_PSGR' => 'GETULIO DEUSDETE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 646,
            'NM_PSGR' => 'COSME PEREIRA DE RESENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 647,
            'NM_PSGR' => 'OSMAR NICOLAU DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 648,
            'NM_PSGR' => 'LUIZ CLAUDIO CARMO OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 649,
            'NM_PSGR' => 'MARCIO ANTONIO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 650,
            'NM_PSGR' => 'JOAO LINO DE OLIVEIRA SOBRINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 651,
            'NM_PSGR' => 'JAIME MONTEIRO DE FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/12/15',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 652,
            'NM_PSGR' => 'EDSON NOCELLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/12/15',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 653,
            'NM_PSGR' => 'EDSON PEREIRA DE AMORIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/12/15',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 654,
            'NM_PSGR' => 'LAECIO MENDES ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/12/15',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 655,
            'NM_PSGR' => 'FRANCISCO A. DA COSTA RAMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/12/15',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 656,
            'NM_PSGR' => 'LUIZ CARLOS DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/12/15',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 657,
            'NM_PSGR' => 'ADALTON ROTONDO ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/01/12',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 658,
            'NM_PSGR' => 'EDSON MRAD DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/06/02',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 659,
            'NM_PSGR' => 'WANDERSON GUEDES TERROR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/11/29',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 660,
            'NM_PSGR' => 'ANTONIO CARLOS DO VALLE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1964/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 661,
            'NM_PSGR' => 'MARIANGELA MAIA VASCONCELLOS',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1964/06/02',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 662,
            'NM_PSGR' => 'EMERSON DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 663,
            'NM_PSGR' => 'JOSE CALAZANS NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/02/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 664,
            'NM_PSGR' => 'MAURICIO BATISTA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/02/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 665,
            'NM_PSGR' => 'NEIMAR DE SOUZA AMORIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/02/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 666,
            'NM_PSGR' => 'CARLOS GERALDO SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 667,
            'NM_PSGR' => 'CORACI GONCALVES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 668,
            'NM_PSGR' => 'PAULO HENRIQUE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 669,
            'NM_PSGR' => 'LUCIANO ROSA QUINTAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 670,
            'NM_PSGR' => 'CUSTODIO PAULO C. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 671,
            'NM_PSGR' => 'MIGUEL ARCANJO MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 672,
            'NM_PSGR' => 'PAULO ROBERTO FERREIRA MALTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 673,
            'NM_PSGR' => 'ROGERIO VALLE BRANDAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 674,
            'NM_PSGR' => 'LIBERIO APARECIDO SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 675,
            'NM_PSGR' => 'VAIR GONCALVES DE LISBOA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 676,
            'NM_PSGR' => 'ALOISIO GUEDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 677,
            'NM_PSGR' => 'UILSON JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 678,
            'NM_PSGR' => 'IVAIR ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/10',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 679,
            'NM_PSGR' => 'PAULO MARCIO SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/22',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 680,
            'NM_PSGR' => 'LIDUINO MANUEL DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/22',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 681,
            'NM_PSGR' => 'GERALDO RAFAEL DINIZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/22',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 682,
            'NM_PSGR' => 'JOAO LOURENCO SIPRIANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 683,
            'NM_PSGR' => 'GUSTAVO ERNESTO DE C. JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 684,
            'NM_PSGR' => 'SERGIO LUIZ MOTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 685,
            'NM_PSGR' => 'VANDERLUCI ISABEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 686,
            'NM_PSGR' => 'ANTONIO PEDRO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 687,
            'NM_PSGR' => 'FLAVIO AUGUSTO COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 688,
            'NM_PSGR' => 'ANTONIO ONOFRE DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 689,
            'NM_PSGR' => 'LADISLAU JOSE MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/10/19',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 690,
            'NM_PSGR' => 'GENESIO APARECIDO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/10/19',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 691,
            'NM_PSGR' => 'ANTONIO AFONSO CARLOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/11/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 692,
            'NM_PSGR' => 'ILTON ALBERTO DALPRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/11/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 693,
            'NM_PSGR' => 'HELIO BITTENCOURT MAGALHAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 694,
            'NM_PSGR' => 'GILSON LOURENCO CARNEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 695,
            'NM_PSGR' => 'ADILSON ISIDORIO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 696,
            'NM_PSGR' => 'PAULO ROBERTO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 697,
            'NM_PSGR' => 'HAMILTON TEIXEIRA DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 698,
            'NM_PSGR' => 'ANATALINO ANANIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 699,
            'NM_PSGR' => 'FRANCISCO DE ASSIS DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/01/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 700,
            'NM_PSGR' => 'JOAO BATISTA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/01/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 701,
            'NM_PSGR' => 'JOSE MARIA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/01/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 702,
            'NM_PSGR' => 'OSWALDO DA SILVA BALBINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/01/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 703,
            'NM_PSGR' => 'ADOLFO JOSE DE BARROS LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/02/09',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 704,
            'NM_PSGR' => 'ANTONIO EDUARDO DE N. FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 705,
            'NM_PSGR' => 'RALF LOPES DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/01/11',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 706,
            'NM_PSGR' => 'FRANCISCO CARLOS MOREIRA RAMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 707,
            'NM_PSGR' => 'HELIO FERREIRA DE AMORIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/04/06',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 708,
            'NM_PSGR' => 'ALTAIR PEDRO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/06/01',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 709,
            'NM_PSGR' => 'IZIDORO ROMAO LESSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/06/01',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 710,
            'NM_PSGR' => 'JOSE FERREIRA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/06/29',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 711,
            'NM_PSGR' => 'MAURICIO DIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/06/29',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 712,
            'NM_PSGR' => 'JOSE WERNECK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 713,
            'NM_PSGR' => 'DILERMANDO CRUZ FIGUEIREDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 714,
            'NM_PSGR' => 'IVAN RIBEIRO DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 715,
            'NM_PSGR' => 'ANTONIO CARLOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 716,
            'NM_PSGR' => 'NELSON MARSAL DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 717,
            'NM_PSGR' => 'LUIZ CARLOS MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 718,
            'NM_PSGR' => 'ANTONIO CARLOS CONSTANTINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 719,
            'NM_PSGR' => 'PEDRO JOVIANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/07/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 720,
            'NM_PSGR' => 'JOSE ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/08/24',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 721,
            'NM_PSGR' => 'WALDIR LUCIO LESSA BARRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/08/24',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 722,
            'NM_PSGR' => 'GILSON OLIVEIRA LEOCADIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1965/09/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 723,
            'NM_PSGR' => 'EDWARD ENGRACIO COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 724,
            'NM_PSGR' => 'LUIZ CARLOS BARINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 725,
            'NM_PSGR' => 'ITAMAR JOSE DIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 726,
            'NM_PSGR' => 'JOAQUIM FRANCISCO TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 727,
            'NM_PSGR' => 'ANTONIO ROMAO LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 728,
            'NM_PSGR' => 'JOSE GERALDO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 729,
            'NM_PSGR' => 'JOSUE SIMOES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 730,
            'NM_PSGR' => 'JURACY FERREIRA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 731,
            'NM_PSGR' => 'JOSE IGNACIO VIEIRA JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 732,
            'NM_PSGR' => 'ANTONIO CARLOS DIOL. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 733,
            'NM_PSGR' => 'MARCOS SANTOS DE MELLO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 734,
            'NM_PSGR' => 'HENRIQUE GABRIEL ZANCANELLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 735,
            'NM_PSGR' => 'AMARILDO ANANIAS ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 736,
            'NM_PSGR' => 'ANTONIO SABINO SILVA NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/04/05',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 737,
            'NM_PSGR' => 'ANTONIO CARLOS DOMIC. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/04/05',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 738,
            'NM_PSGR' => 'JOSE GERALDO GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/05/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 739,
            'NM_PSGR' => 'ADEMIR RODRIGUES ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/05/31',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 740,
            'NM_PSGR' => 'ROQUE PEDRO DE ANDRADE FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/05/31',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 741,
            'NM_PSGR' => 'ANTONIO MARIANO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/07/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 742,
            'NM_PSGR' => 'PAULO RAYMUNDO P. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/07/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 743,
            'NM_PSGR' => 'MARCO ANTONIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/07/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 744,
            'NM_PSGR' => 'ADILSON DIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/08/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 745,
            'NM_PSGR' => 'AFONSO ONOFRE DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/08/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 746,
            'NM_PSGR' => 'LUIS CLAUDIO B. THEODORO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/08/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 747,
            'NM_PSGR' => 'RUI MANOEL CANTARELI ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/08/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 748,
            'NM_PSGR' => 'JARBAS MARTINS COELHO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/09/24',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 749,
            'NM_PSGR' => 'JORGE PINTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/10/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 750,
            'NM_PSGR' => 'MIGUEL ARCANJO DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/11/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 751,
            'NM_PSGR' => 'SERGIO ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/12/13',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 752,
            'NM_PSGR' => 'MARCUS VINICIUS B. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/01/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 753,
            'NM_PSGR' => 'GEISLER RODRIGUES CARNOT',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/01/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 754,
            'NM_PSGR' => 'JOAO PAULO DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/01/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 755,
            'NM_PSGR' => 'IVAN NERY DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 756,
            'NM_PSGR' => 'JOSE PINHEIRO MONTEIRO JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/05/31',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 757,
            'NM_PSGR' => 'JOAO BAPTISTA DAIBERT',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/12/13',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 758,
            'NM_PSGR' => 'CLOVIS NERY ESTEVES DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/02/12',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 759,
            'NM_PSGR' => 'PIO DE SOUZA NOGUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/05/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 760,
            'NM_PSGR' => 'ELCIO TORRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/05/31',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 761,
            'NM_PSGR' => 'MIGUEL ANTONIO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1966/08/23',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 762,
            'NM_PSGR' => 'ROSSANA MONTEIRO C. SEIXAS',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1966/07/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 763,
            'NM_PSGR' => 'ROGERIO DA ROCHA GALO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/04/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 764,
            'NM_PSGR' => 'JOSE ANTONIO CUSTODIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/04/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 765,
            'NM_PSGR' => 'FRANCISCO PEREIRA DO VALE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/04/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 766,
            'NM_PSGR' => 'LUIZ MARCIO DE BRITTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/07/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 767,
            'NM_PSGR' => 'WAGNER JOSE BORGES DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/07/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 768,
            'NM_PSGR' => 'JOSE MARIA NOVATO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/07/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 769,
            'NM_PSGR' => 'JOSE RICARDO BERBERICK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/07/25',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 770,
            'NM_PSGR' => 'JOSIMIR TARCISIO STEPHAN',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 771,
            'NM_PSGR' => 'AFONSO MARIA CARDOSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 772,
            'NM_PSGR' => 'MURILO NEDER DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 773,
            'NM_PSGR' => 'JONAS DOS SANTOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 774,
            'NM_PSGR' => 'SERGIO AUGUSTO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 775,
            'NM_PSGR' => 'JOSE ANTONIO MOTA E SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 776,
            'NM_PSGR' => 'LUIS ALBERTO LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/09/03',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 777,
            'NM_PSGR' => 'MARCO AURELIO OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/09/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 778,
            'NM_PSGR' => 'JOSE LUIZ MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/09/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 779,
            'NM_PSGR' => 'ALOIZIO PEREIRA DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/09/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 780,
            'NM_PSGR' => 'CARLOS ANTONIO TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/10/01',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 781,
            'NM_PSGR' => 'SERGIO ANTONIO SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/10/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 782,
            'NM_PSGR' => 'EDMILSON DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/10/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 783,
            'NM_PSGR' => 'CARLOS ALEXANDRE DE MIRANDA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1967/10/17',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 784,
            'NM_PSGR' => 'CARLOS HENRIQUE GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/11/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 785,
            'NM_PSGR' => 'GILSON VERISSIMO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/12/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 786,
            'NM_PSGR' => 'JULIO CESAR DA SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/12/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 787,
            'NM_PSGR' => 'PAULO ROBERTO V. DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/12/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 788,
            'NM_PSGR' => 'JOSE MARIA AVELAR DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/12/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 789,
            'NM_PSGR' => 'DARIO PEREIRA PAIXAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 790,
            'NM_PSGR' => 'AMAURI DE PAULO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 791,
            'NM_PSGR' => 'GERSON DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 792,
            'NM_PSGR' => 'MARTINIANO MARQUES OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 793,
            'NM_PSGR' => 'RINALDO ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 794,
            'NM_PSGR' => 'ANSELMO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 795,
            'NM_PSGR' => 'AMANTINO COUTINHO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/08/22',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 796,
            'NM_PSGR' => 'MARCO AURELIO JULIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/09/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 797,
            'NM_PSGR' => 'JOSE EUSTAQUIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/12/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 798,
            'NM_PSGR' => 'SERGIO GERALDO M. DE FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/12/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 799,
            'NM_PSGR' => 'JOSE LEACIR DE F. GONCALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/10/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 800,
            'NM_PSGR' => 'JOSE MARCOS THOMAZ DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 801,
            'NM_PSGR' => 'JUDITH MARIA DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1967/05/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 802,
            'NM_PSGR' => 'JOSE RICARDO DE MOURA BRAGA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/05/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 803,
            'NM_PSGR' => 'JAIR MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/05/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 804,
            'NM_PSGR' => 'CELIO OLIVEIRA DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1967/05/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 805,
            'NM_PSGR' => 'HELIO RODRIGUES PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/04/10',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 806,
            'NM_PSGR' => 'LUIZ CARLOS TRIFILIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/09/01',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 807,
            'NM_PSGR' => 'FRANCISCO DOMINGUES DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/08/24',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 808,
            'NM_PSGR' => 'SIDNEI LUIZ DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 809,
            'NM_PSGR' => 'AELCIO LIMA DUARTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 810,
            'NM_PSGR' => 'RENATO GERALDO CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 811,
            'NM_PSGR' => 'VANDERLEI MATEUS LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 812,
            'NM_PSGR' => 'SEBASTIAO RABELLO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/03/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 813,
            'NM_PSGR' => 'EDMILSON VITORIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/03/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 814,
            'NM_PSGR' => 'JOSE GONCALVES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 815,
            'NM_PSGR' => 'JOSE CARLOS AMBROSIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 816,
            'NM_PSGR' => 'ROGERIO TOLEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/04/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 817,
            'NM_PSGR' => 'LUIZ CLAUDIO A. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/05/28',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 818,
            'NM_PSGR' => 'JOSE AMARILIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/06/25',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 819,
            'NM_PSGR' => 'ALCIMAR ALVES SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 820,
            'NM_PSGR' => 'ROBERTO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 821,
            'NM_PSGR' => 'LINO DE BARROS FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 822,
            'NM_PSGR' => 'SEBASTIAO DE CASTRO BARRETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/08/20',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 823,
            'NM_PSGR' => 'JOSE CELSO DE AQUINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/08/20',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 824,
            'NM_PSGR' => 'PEDRO BARBARA DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/08/20',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 825,
            'NM_PSGR' => 'JOSE GERALDO FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/08/20',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 826,
            'NM_PSGR' => 'JOSE LOPES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/09/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 827,
            'NM_PSGR' => 'RICARDO LUIS DILLY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/09/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 828,
            'NM_PSGR' => 'ADELSON MARTINS DE CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/09/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 829,
            'NM_PSGR' => 'JOSE CARLOS GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/09/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 830,
            'NM_PSGR' => 'JOAQUIM AGOSTINHO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/09/25',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 831,
            'NM_PSGR' => 'MANOEL RODRIGUES DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 832,
            'NM_PSGR' => 'CASCIO TADEU DE SA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 833,
            'NM_PSGR' => 'JOSE GERALDO TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 834,
            'NM_PSGR' => 'ELISIER DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 835,
            'NM_PSGR' => 'GERSON WYLHER DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 836,
            'NM_PSGR' => 'ALVARO MACIEL DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 837,
            'NM_PSGR' => 'IDIMAR BORGES DUQUE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 838,
            'NM_PSGR' => 'AMARILDO EUZEBIO ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 839,
            'NM_PSGR' => 'PAULO CEZAR DE REZENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 840,
            'NM_PSGR' => 'CLEIMAR MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 841,
            'NM_PSGR' => 'ERICO JOSE VILLELA DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/12/10',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 842,
            'NM_PSGR' => 'FABIO FERNANDES DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/12/10',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 843,
            'NM_PSGR' => 'PAULO ROBERTO BOTEZINE SIMEAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/12/10',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 844,
            'NM_PSGR' => 'ANTONIO PEDRO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 845,
            'NM_PSGR' => 'RONALDO SIQUEIRA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 846,
            'NM_PSGR' => 'LAUDIR BATISTA CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 847,
            'NM_PSGR' => 'ROUSIMAR FERREIRA NEVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 848,
            'NM_PSGR' => 'VICENTE LEOCADIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 849,
            'NM_PSGR' => 'JOAO BATISTA VIEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 850,
            'NM_PSGR' => 'JOSE GERALDO XAVIER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 851,
            'NM_PSGR' => 'PEDRO AUGUSTO PASSOS DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 852,
            'NM_PSGR' => 'REGIS RIBEIRO VARANDAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 853,
            'NM_PSGR' => 'LUCIA HELENA C. M. DOS SANTOS',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1968/04/06',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 854,
            'NM_PSGR' => 'PAULO ROBERTO DE FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/05/28',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 855,
            'NM_PSGR' => 'MARCELO TROPIA GRANJA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/06/09',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 856,
            'NM_PSGR' => 'JOAO BATISTA MACHADO TAVARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/06/25',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 857,
            'NM_PSGR' => 'CELSO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 858,
            'NM_PSGR' => 'JOAO CARLOS DE SOUSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 859,
            'NM_PSGR' => 'GLAUCO ALEXANDRE SANTOS HORTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/06/25',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 860,
            'NM_PSGR' => 'JOSE ACACIO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 861,
            'NM_PSGR' => 'WALDECIR RIBEIRO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/10/15',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 862,
            'NM_PSGR' => 'ALOISIO NARDELLI MALTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1968/12/10',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 863,
            'NM_PSGR' => 'GILMAR LEWER MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/07/10',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 864,
            'NM_PSGR' => 'PAULO SERGIO LIMA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/03',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 865,
            'NM_PSGR' => 'CARLOS ALBERTO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/02/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 866,
            'NM_PSGR' => 'VALDIR DE SA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/02/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 867,
            'NM_PSGR' => 'LINDOMAR DE OLIVEIRA ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/02/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 868,
            'NM_PSGR' => 'MAURICIO BARROS LADEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/02/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 869,
            'NM_PSGR' => 'NARDELI SAIDLER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/02/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 870,
            'NM_PSGR' => 'CARLOS ALBERTO NEVES LANZIOTTI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/02/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 871,
            'NM_PSGR' => 'ENIO GODINHO PORTO JUNIOR',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1969/03/04',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 872,
            'NM_PSGR' => 'GIORDANO IDERAUDO CORDEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/03/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 873,
            'NM_PSGR' => 'JOAO JUVENCIO RITO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/03/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 874,
            'NM_PSGR' => 'EDSON CARLOS VENANCIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/03/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 875,
            'NM_PSGR' => 'LUCIANO ABILIO A. DE MEIRELLES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 876,
            'NM_PSGR' => 'JOSE ALVES DA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 877,
            'NM_PSGR' => 'ANTONIO VICOSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 878,
            'NM_PSGR' => 'MARCOS ROBERTO TIAGO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 879,
            'NM_PSGR' => 'PEDRO MARQUES DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 880,
            'NM_PSGR' => 'GERALDO ROSA SOBRINHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/04/29',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 881,
            'NM_PSGR' => 'ELCIO CARLOS DE MENEZES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/04/29',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 882,
            'NM_PSGR' => 'CRISTINO CESARIO CASSIMIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 883,
            'NM_PSGR' => 'EDMAR RAYMUNDO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 884,
            'NM_PSGR' => 'SEBASTIAO LAURINDO DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 885,
            'NM_PSGR' => 'ZALDIVAR VIRGOLINO SERAFIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 886,
            'NM_PSGR' => 'OSVALDO DA CUNHA PACHECO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 887,
            'NM_PSGR' => 'JOSE CARLOS PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 888,
            'NM_PSGR' => 'JOSE ALVES MIRANDA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 889,
            'NM_PSGR' => 'SANTOS JOSE DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 890,
            'NM_PSGR' => 'PAULO EDUARDO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 891,
            'NM_PSGR' => 'RONNIE CARLOS RAMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/08',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 892,
            'NM_PSGR' => 'JOAO BATISTA DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/08',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 893,
            'NM_PSGR' => 'SEBASTIAO RAIMUNDO NETTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/24',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 894,
            'NM_PSGR' => 'LUIZ EDUARDO DA SILVA BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 895,
            'NM_PSGR' => 'GIUMAR DEOLINO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 896,
            'NM_PSGR' => 'MILTON DA CUNHA BORBA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/28',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 897,
            'NM_PSGR' => 'ELIZIO FRANCISCO CANEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/07/10',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 898,
            'NM_PSGR' => 'OTTO CRIVELLARI JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/03',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 899,
            'NM_PSGR' => 'EVALDO MOTA MAGALHAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/03',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 900,
            'NM_PSGR' => 'BEN-HUR DIAS DA FONSECA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/19',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 901,
            'NM_PSGR' => 'VICENTE DE PAULO F. PITTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/19',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 902,
            'NM_PSGR' => 'RONALD MARCOS DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/23',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 903,
            'NM_PSGR' => 'JOSE GERALDO DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/23',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 904,
            'NM_PSGR' => 'AMARILDO FLAVIANO NICODEMOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/27',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 905,
            'NM_PSGR' => 'SILVIO RAMOS DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/31',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 906,
            'NM_PSGR' => 'IVANIR ABILIO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/31',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 907,
            'NM_PSGR' => 'ELMO TIBURCIO SILVERIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/09/16',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 908,
            'NM_PSGR' => 'JOSE CARLOS MODESTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/09/16',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 909,
            'NM_PSGR' => 'MARCO AURELIO M. RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/09/24',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 910,
            'NM_PSGR' => 'MARCOS ANTONIO QUATORZE VOLTAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/09/28',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 911,
            'NM_PSGR' => 'JOSE PIRES DE OLIVEIRA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/09/28',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 912,
            'NM_PSGR' => 'JOSE WILLIAM COSTA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 913,
            'NM_PSGR' => 'ADEMIR DE SOUSA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/14',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 914,
            'NM_PSGR' => 'MARCOS HENRIQUES DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/18',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 915,
            'NM_PSGR' => 'MARCIO LUIZ ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/18',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 916,
            'NM_PSGR' => 'DIMAS CUSTODIO DE ASSIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/18',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 917,
            'NM_PSGR' => 'CARLOS ROBERTO F. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 918,
            'NM_PSGR' => 'JOSE ANTONIO DE AZEVEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 919,
            'NM_PSGR' => 'CLAUDIO CAETANO DE FARIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 920,
            'NM_PSGR' => 'ARY JOSE TEIXEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 921,
            'NM_PSGR' => 'WAGNER LUIS TOSTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/26',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 922,
            'NM_PSGR' => 'ANDERSON DE MENDONCA DORE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/26',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 923,
            'NM_PSGR' => 'ITALO DE CARVALHO V. CAVACA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/26',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 924,
            'NM_PSGR' => 'LUIZ FERNANDO CUNHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/30',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 925,
            'NM_PSGR' => 'JULIO CESAR MARINHO MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/30',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 926,
            'NM_PSGR' => 'NELSON ZEFERINO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/30',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 927,
            'NM_PSGR' => 'VALCIMAR ANTONIO CALIXTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/11',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 928,
            'NM_PSGR' => 'SEBASTIAO ADEMIR CAGNIN',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/11',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 929,
            'NM_PSGR' => 'LUIZ DE CASTRO NETTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/11',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 930,
            'NM_PSGR' => 'GERALDO CESAR SIMIAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/11',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 931,
            'NM_PSGR' => 'LINCON LARIMEL ALVES GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/11',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 932,
            'NM_PSGR' => 'GERALDO DE OLIVEIRA LULY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 933,
            'NM_PSGR' => 'PAULO CESAR VARGAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 934,
            'NM_PSGR' => 'VALTINO ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 935,
            'NM_PSGR' => 'PAULO HENRIQUE M. PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 936,
            'NM_PSGR' => 'GILSIMAR COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/11/27',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 937,
            'NM_PSGR' => 'VILMAR RAIMUNDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/12/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 938,
            'NM_PSGR' => 'MARCIO LUIZ GERMANO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/12/13',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 939,
            'NM_PSGR' => 'LUIZ CLAUDIO DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/01/06',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 940,
            'NM_PSGR' => 'ROBERTO CARLOS DA FONSECA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/01/06',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 941,
            'NM_PSGR' => 'PAULO CESAR C. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/01/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 942,
            'NM_PSGR' => 'MATIAS GERALDO DIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/04/29',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 943,
            'NM_PSGR' => 'MARCIO CHICRE DUTRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 944,
            'NM_PSGR' => 'MAURICIO ROMEIRO DO SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 945,
            'NM_PSGR' => 'FRANCISCO QUERINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/31',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 946,
            'NM_PSGR' => 'HELIO FERREIRA NETTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/07/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 947,
            'NM_PSGR' => 'PAULO MEIRELLES PONTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/19',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 948,
            'NM_PSGR' => 'MARCOS WADIH ARBEX',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 949,
            'NM_PSGR' => 'CARLOS EDUARDO DE SOUSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/12/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 950,
            'NM_PSGR' => 'ERNANI RICARDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/12/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 951,
            'NM_PSGR' => 'LOURIVAL JOSE RIBEIRO CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/12/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 952,
            'NM_PSGR' => 'MARCELO DE MIRANDA PONTES',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1969/12/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 953,
            'NM_PSGR' => 'PAULO ROBERTO MEDEIROS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/01/06',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 954,
            'NM_PSGR' => 'FERNANDO JOSE CORREA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/04/05',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 955,
            'NM_PSGR' => 'ALOISIO GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 956,
            'NM_PSGR' => 'GILMAR LUIZ PRADO INHAN',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/27',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 957,
            'NM_PSGR' => 'ANTONIO TOMAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/06/24',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 958,
            'NM_PSGR' => 'HELIO DE PAULA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/01/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 959,
            'NM_PSGR' => 'JOSE BENEDITO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 960,
            'NM_PSGR' => 'LENI DIAS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 961,
            'NM_PSGR' => 'JOSE PEDRO GOMES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 962,
            'NM_PSGR' => 'ANTONIO PEREIRA LOPES FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 963,
            'NM_PSGR' => 'EDSON TEIXEIRA SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 964,
            'NM_PSGR' => 'MARCO ANTONIO MEIRELES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 965,
            'NM_PSGR' => 'MANOEL JUSTINIANO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 966,
            'NM_PSGR' => 'ILTON JOSE VIEIRA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 967,
            'NM_PSGR' => 'JOSE ARAUJO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 968,
            'NM_PSGR' => 'DIOVIGENES MIGUEL PENA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 969,
            'NM_PSGR' => 'ANTONIO BATISTA DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 970,
            'NM_PSGR' => 'MARCO ANTONIO DE MORAIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 971,
            'NM_PSGR' => 'ARI CANDIDO DE SOUSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 972,
            'NM_PSGR' => 'JOAO CICERO DE SA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 973,
            'NM_PSGR' => 'PIO BATISTA DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/05/31',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 974,
            'NM_PSGR' => 'NYLTON PIRILO GONCALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/08/03',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 975,
            'NM_PSGR' => 'JOEL CORREA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/04/29',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 976,
            'NM_PSGR' => 'ALVARO EDUARDO MARQUES LESSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 977,
            'NM_PSGR' => 'JOSE LEOPOLDO DE S. JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1969/10/18',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 978,
            'NM_PSGR' => 'MARIA CRISTINA PEROTTI ALONSO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1970/03/31',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 979,
            'NM_PSGR' => 'FLAVIO DE ASSUMPCAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/05/30',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 980,
            'NM_PSGR' => 'HAROLDO GOMES NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 981,
            'NM_PSGR' => 'VENERANDO FERNANDO SCORALICK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 982,
            'NM_PSGR' => 'JOSE FRANCISCO N. P. DAS NEVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 983,
            'NM_PSGR' => 'MARCUS AURELIO ILDEFONSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/02/11',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 984,
            'NM_PSGR' => 'ERICO VERISSIMO SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/02/11',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 985,
            'NM_PSGR' => 'JOSE RENATO DE C. NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/03/03',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 986,
            'NM_PSGR' => 'WILLIAM DA SILVA ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/03/03',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 987,
            'NM_PSGR' => 'ANDRE LUIZ QUATORZE VOLTAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 988,
            'NM_PSGR' => 'LOURIVAL SOARES GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/08',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 989,
            'NM_PSGR' => 'SEBASTIAO LEANDRO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/08',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 990,
            'NM_PSGR' => 'JOSE RONALDO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/12',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 991,
            'NM_PSGR' => 'VAGNER SOARES RUAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/28',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 992,
            'NM_PSGR' => 'JOSE CARLOS RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/28',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 993,
            'NM_PSGR' => 'LEVY FAUSTINO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/05/02',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 994,
            'NM_PSGR' => 'NELSON VITOR R. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/05/06',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 995,
            'NM_PSGR' => 'MILTON JOSE VICENTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/05/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 996,
            'NM_PSGR' => 'ANTONIO DE PADUA DE J. SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/05/14',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 997,
            'NM_PSGR' => 'JOAO VENTURA NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/06/03',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 998,
            'NM_PSGR' => 'SILVINO ANTONIO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/06/07',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 999,
            'NM_PSGR' => 'JOAO LUCIO BATISTA DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/06/23',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1000,
            'NM_PSGR' => 'PAULO CESAR DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/06/27',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1001,
            'NM_PSGR' => 'MAURICIO ZANCANELLA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1002,
            'NM_PSGR' => 'IVAN CAMPOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1003,
            'NM_PSGR' => 'ANTONIO FERNANDO P. GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1004,
            'NM_PSGR' => 'ALEXANDRE FERNANDES DE LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/08/02',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1005,
            'NM_PSGR' => 'ROGERIO TEIXEIRA NUNES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1006,
            'NM_PSGR' => 'LUIZ FERNANDES DO AMARAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1007,
            'NM_PSGR' => 'ANDRE CANDIDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/08/30',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1008,
            'NM_PSGR' => 'GILBERTO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/08/30',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1009,
            'NM_PSGR' => 'EVANDRO JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/09/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1010,
            'NM_PSGR' => 'LAERTE MARCOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/09/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1011,
            'NM_PSGR' => 'VALDIVINO SOARES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/09/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1012,
            'NM_PSGR' => 'NILSON BOLOTARI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/09/27',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1013,
            'NM_PSGR' => 'ANDRE LUIZ DECNOP DA FONSECA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/10/01',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1014,
            'NM_PSGR' => 'ANDRE LUIZ DE MORAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/10/01',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1015,
            'NM_PSGR' => 'WAGNER ISMAEL DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/10/13',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1016,
            'NM_PSGR' => 'JOSE SEVERINO DA COSTA MATOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/10/13',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1017,
            'NM_PSGR' => 'GETULIO C. DE VASCONCELOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/10/29',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1018,
            'NM_PSGR' => 'MILTON DE MATTOS HENRIQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/11/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1019,
            'NM_PSGR' => 'JOAO FLORENTINO DE A. CUNHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/12/08',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1020,
            'NM_PSGR' => 'MARIA DAS GRACAS DA SILVA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1971/01/09',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1021,
            'NM_PSGR' => 'PEDRO RODRIGUES DA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/01/13',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1022,
            'NM_PSGR' => 'PAULO ROBERTO G. FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/03/03',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1023,
            'NM_PSGR' => 'LEONEL MELQUISEDEQUE VICTOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/28',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1024,
            'NM_PSGR' => 'NEIDER CARDOSO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/08/18',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1025,
            'NM_PSGR' => 'JOSE NELSON FIGUEIREDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/11/22',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1026,
            'NM_PSGR' => 'MARCELO ALVIM JORGE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/12/08',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1027,
            'NM_PSGR' => 'SEBASTIAO GILMAR RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/01/05',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1028,
            'NM_PSGR' => 'JORGE LUIZ SILVA NETTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/01/14',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1029,
            'NM_PSGR' => 'SINVAL CANDIDO BOMFONTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/04/12',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1030,
            'NM_PSGR' => 'ROBSON MATOSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/05/26',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1031,
            'NM_PSGR' => 'VALDIR CLARINDO DULCO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/06/23',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1032,
            'NM_PSGR' => 'REYNALDO W. DE ARAUJO QUEIROZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/11/10',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1033,
            'NM_PSGR' => 'JOSE MARIA DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/12/08',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1034,
            'NM_PSGR' => 'GERSON FILGUEIRAS PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1970/07/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1035,
            'NM_PSGR' => 'SERGIO RICARDO ITABORAHY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/01/13',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1036,
            'NM_PSGR' => 'NELIA MARIA DOS REIS',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1970/02/19',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1037,
            'NM_PSGR' => 'JOSE TADEU DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/05/25',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1038,
            'NM_PSGR' => 'ERCIL BRETAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/01/21',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1039,
            'NM_PSGR' => 'MICHELSON SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/02/06',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1040,
            'NM_PSGR' => 'EDIMAR JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/02/06',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1041,
            'NM_PSGR' => 'JOSE MARIA MAGALHAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/02',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1042,
            'NM_PSGR' => 'MANOEL ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/02',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1043,
            'NM_PSGR' => 'CELSO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/02',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1044,
            'NM_PSGR' => 'ANDERSON GROSSI VIDIGAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1045,
            'NM_PSGR' => 'ANEZIO VITORINO COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/04/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1046,
            'NM_PSGR' => 'MAURI SEBASTIAO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/04/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1047,
            'NM_PSGR' => 'JOSE MARIO ALVES DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/04/27',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1048,
            'NM_PSGR' => 'JOSE MATHIAS RIBAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/05/01',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1049,
            'NM_PSGR' => 'SEBASTIAO JOSE GRACA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/06/02',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1050,
            'NM_PSGR' => 'PAULO CESAR ALVES DAS NEVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/06/02',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1051,
            'NM_PSGR' => 'PAULO ROBERTO BENEDITO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/06/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1052,
            'NM_PSGR' => 'JOSE CARLOS FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/06/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1053,
            'NM_PSGR' => 'JOSE LUIZ DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/06/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1054,
            'NM_PSGR' => 'JOAO DELFINO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/07/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1055,
            'NM_PSGR' => 'JAILTON CONCEICAO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/07/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1056,
            'NM_PSGR' => 'ROGERIO R. BARBOSA DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/07/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1057,
            'NM_PSGR' => 'HORACIO PIRES DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/08/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1058,
            'NM_PSGR' => 'FRANCISCO JACINTO FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/08/29',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1059,
            'NM_PSGR' => 'LAZARO LUIZ RIBEIRO SANTIAGO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/09/26',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1060,
            'NM_PSGR' => 'ORLANDO ALVES MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/10/16',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1061,
            'NM_PSGR' => 'MARIO LUCIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/10/16',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1062,
            'NM_PSGR' => 'GERALDO MAGELA WERNECK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/11/09',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1063,
            'NM_PSGR' => 'CUSTODIO EDUARDO M. COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/11/09',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1064,
            'NM_PSGR' => 'JOSE FRANCISCO FERREIRA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1065,
            'NM_PSGR' => 'LUCIANO AUGUSTO REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1066,
            'NM_PSGR' => 'EVANDRO LUIZ FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1067,
            'NM_PSGR' => 'MARIA LUCIA S. NUNES',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1971/12/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1068,
            'NM_PSGR' => 'GERALDO TADEU DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/01/08',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1069,
            'NM_PSGR' => 'AMAURI MATHIAS DE MATTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/01/12',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1070,
            'NM_PSGR' => 'WIL ANTONIO CARVALHO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1071,
            'NM_PSGR' => 'ADRIANO FERREIRA DE SANTA ANNA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/11/09',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1072,
            'NM_PSGR' => 'GERALDO MAGELA NUNES DE MORAIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/01/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1073,
            'NM_PSGR' => 'PAULO ROBERTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/08/29',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1074,
            'NM_PSGR' => 'VANDERLEY DA SILVA BORGES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/12/19',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1075,
            'NM_PSGR' => 'JAIDER DA SILVA FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/02/02',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1076,
            'NM_PSGR' => 'WANDERSON DE MEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/02',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1077,
            'NM_PSGR' => 'MOACIR MENDES DAS CHAGAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1971/03/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1078,
            'NM_PSGR' => 'ALVARO BRAGA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/02/01',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1079,
            'NM_PSGR' => 'SELBIO LUIZ LONGO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/01/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1080,
            'NM_PSGR' => 'ROBERTO DE PAIVA OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/03/04',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1081,
            'NM_PSGR' => 'ENRIQUE MENEZES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/03/04',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1082,
            'NM_PSGR' => 'JOSE CARLOS R. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/03/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1083,
            'NM_PSGR' => 'MAURICIO MARIA DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/04/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1084,
            'NM_PSGR' => 'NEWTON CARVALHO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/04/09',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1085,
            'NM_PSGR' => 'ILDEU CERQUEIRA SALDANHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1086,
            'NM_PSGR' => 'VILSON JOSE BIANCHETTI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1087,
            'NM_PSGR' => 'PAULO HENRIQUE PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/11',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1088,
            'NM_PSGR' => 'EDIVALDO MARTINS RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1089,
            'NM_PSGR' => 'DVALDO DE JESUS MONTEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1090,
            'NM_PSGR' => 'JONAS RAFAEL DUTRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1091,
            'NM_PSGR' => 'REINALDO MOREIRA LANA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/06/04',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1092,
            'NM_PSGR' => 'DIRCEU JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/06/20',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1093,
            'NM_PSGR' => 'GERALDO OLIVEIRA HERCULANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1094,
            'NM_PSGR' => 'FELIPE NACIF NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/07/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1095,
            'NM_PSGR' => 'JOAO CICERO DA FONSECA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/07/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1096,
            'NM_PSGR' => 'JOSE ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/07/30',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1097,
            'NM_PSGR' => 'GILBERTO ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/08/19',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1098,
            'NM_PSGR' => 'JOSE ALVES MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/10/10',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1099,
            'NM_PSGR' => 'LUIZ MARCIO LEONEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/12/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1100,
            'NM_PSGR' => 'BRUNO DE OLIVEIRA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/01/02',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1101,
            'NM_PSGR' => 'ALVARO BOSCO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/01/02',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1102,
            'NM_PSGR' => 'HELIO CARLOS CERQUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1103,
            'NM_PSGR' => 'ADILSON BERZOINI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/07/02',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1104,
            'NM_PSGR' => 'JAIME RESENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/07/18',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1105,
            'NM_PSGR' => 'LUIZ FERNANDO M. AMARO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/10/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1106,
            'NM_PSGR' => 'HEBERTH DE OLIVEIRA RESENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/10/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1107,
            'NM_PSGR' => 'ROBERTO GUERRA MATOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/10/14',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1108,
            'NM_PSGR' => 'DIMAS ONGARO GROPO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1109,
            'NM_PSGR' => 'GERSON MONTESSI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/03/16',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1110,
            'NM_PSGR' => 'JULIO CESAR LA-CORTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/05/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1111,
            'NM_PSGR' => 'ANTONIO AMBROSIO SATURNINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/10/10',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1112,
            'NM_PSGR' => 'OSWALDO SILVA DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1972/12/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1113,
            'NM_PSGR' => 'VALERIO ALVIM FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/01/14',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1114,
            'NM_PSGR' => 'CLAUDIO DOMINGOS DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/02/03',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1115,
            'NM_PSGR' => 'DANIEL PEREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1116,
            'NM_PSGR' => 'JORGE LUIZ MONTEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/04/12',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1117,
            'NM_PSGR' => 'LUIZ CARLOS ELER PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/06/03',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1118,
            'NM_PSGR' => 'GERALDO MAGELA CHIARADIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/06/03',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1119,
            'NM_PSGR' => 'EVANDRO CASSIO DE P. E SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/01',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1120,
            'NM_PSGR' => 'OSCAR ROBERTO DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/01',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1121,
            'NM_PSGR' => 'HENRIQUE CARLOS DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/17',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1122,
            'NM_PSGR' => 'DARIO SABENCA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1123,
            'NM_PSGR' => 'WALMIR BARRETO MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1124,
            'NM_PSGR' => 'GIOVANE DE ALMEIDA CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1125,
            'NM_PSGR' => 'ATALIBA GERCOSSIMO DUTRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1126,
            'NM_PSGR' => 'NIVALDO DE SOUZA LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/09/27',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1127,
            'NM_PSGR' => 'ANTONIO DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/11/06',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1128,
            'NM_PSGR' => 'JULIO CEZAR DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/12/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1129,
            'NM_PSGR' => 'CELSO FERREIRA JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/05/06',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1130,
            'NM_PSGR' => 'LUIZ HENRIQUE DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1131,
            'NM_PSGR' => 'NILSON SEBASTIAO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1132,
            'NM_PSGR' => 'JOSE DOS SANTOS BELCHIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/01/01',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1133,
            'NM_PSGR' => 'ALEXANDRE SIMOES BEZERRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/01/01',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1134,
            'NM_PSGR' => 'JOILDE AUGUSTO DE M. CORTEZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/01/05',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1135,
            'NM_PSGR' => 'ROBERTO DA CRUZ SOBREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/01/13',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1136,
            'NM_PSGR' => 'TARCISIO JOSE DE C. PRIAMO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1137,
            'NM_PSGR' => 'JOSE LUCIANO SERPA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1138,
            'NM_PSGR' => 'JOAO CARLOS DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/07/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1139,
            'NM_PSGR' => 'NATANAEL FRANCISCO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1140,
            'NM_PSGR' => 'FRANCISCO MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1973/10/25',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1141,
            'NM_PSGR' => 'HELOISA HELENA DE R. MOREIRA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1974/04/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1142,
            'NM_PSGR' => 'LUIS EDUARDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/10/08',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1143,
            'NM_PSGR' => 'SAMUEL GUIMARAES SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/10/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1144,
            'NM_PSGR' => 'EDUARDO HENRIQUE BITTENCOURT',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/10/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1145,
            'NM_PSGR' => 'MIGUEL JANUARIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/02/02',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1146,
            'NM_PSGR' => 'MAURO LUCIO RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/02/06',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1147,
            'NM_PSGR' => 'ARMANDO DIAS LEONEL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/02/10',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1148,
            'NM_PSGR' => 'DIRCEU AUGUSTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/14',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1149,
            'NM_PSGR' => 'JOAO DE PAULA MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/04/03',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1150,
            'NM_PSGR' => 'MARCELO AFONSO VICTOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/06/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1151,
            'NM_PSGR' => 'REGINALDO BARBOSA DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/06/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1152,
            'NM_PSGR' => 'MARCIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/06/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1153,
            'NM_PSGR' => 'DIRCEU DAS DORES PEDRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/06/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1154,
            'NM_PSGR' => 'EDSON MURILO ALVES VIEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/06/26',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1155,
            'NM_PSGR' => 'ALEXANDRE LUIZ R.N. DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/07/20',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1156,
            'NM_PSGR' => 'MARCOS VINICIUS DOS S. SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/07/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1157,
            'NM_PSGR' => 'JOSE ANTONIO HERCULANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1158,
            'NM_PSGR' => 'PEDRO JUNIOR F. CERQUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/11/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1159,
            'NM_PSGR' => 'CARLOS ANTONIO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/11/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1160,
            'NM_PSGR' => 'SERGIO LUIS R. BERNARDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/11/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1161,
            'NM_PSGR' => 'LUCIO DOS SANTOS REIS SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/11/09',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1162,
            'NM_PSGR' => 'HAROLDO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/02/02',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1163,
            'NM_PSGR' => 'ALTAIR GOMES PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/08/21',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1164,
            'NM_PSGR' => 'MARCIO ANTONIO MATIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/12/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1165,
            'NM_PSGR' => 'MARIO D ANDRIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/02/26',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1166,
            'NM_PSGR' => 'SATURNINO OLIVEIRA DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/02',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1167,
            'NM_PSGR' => 'JAIR JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1168,
            'NM_PSGR' => 'JOSE EDISIO MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1169,
            'NM_PSGR' => 'MARIO ANTONIO C. FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1170,
            'NM_PSGR' => 'ADAO JOSE DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1171,
            'NM_PSGR' => 'EVERALDO DAS GRACAS OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1172,
            'NM_PSGR' => 'BEIJAMIN LEITE DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1173,
            'NM_PSGR' => 'JORGE ROBERTO DUARTE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/03/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1174,
            'NM_PSGR' => 'ADAIR EFREN DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/04/07',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1175,
            'NM_PSGR' => 'MARCIO LUCAS GONCALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/07/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1176,
            'NM_PSGR' => 'LUIZ CARLOS BORGES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/10/08',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1177,
            'NM_PSGR' => 'CHARLES CAMERINI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/09/18',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1178,
            'NM_PSGR' => 'AILTON DINIZ PEDRAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/06/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'C',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1179,
            'NM_PSGR' => 'ADRIANA NASSER',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1974/10/08',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1180,
            'NM_PSGR' => 'RENATO AUGUSTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/12/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1181,
            'NM_PSGR' => 'PEDRO FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/12/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1182,
            'NM_PSGR' => 'CLAUDIO SEVERINO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/12/11',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1183,
            'NM_PSGR' => 'LUIZ CARLOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1974/12/15',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => null,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1184,
            'NM_PSGR' => 'JULIO CESAR A. BARROSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/01/28',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 854,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1185,
            'NM_PSGR' => 'MAURICIO LEONARDO SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/02/01',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 155,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1186,
            'NM_PSGR' => 'JOSE FRANCISCO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/02/25',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 501,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1187,
            'NM_PSGR' => 'ANTONIO DONALDO DE PADUA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/03/09',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 979,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1188,
            'NM_PSGR' => 'MARCELO RODRIGUES ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/05/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 475,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1189,
            'NM_PSGR' => 'MARCIO LUIZ BROCHINI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/05/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 412,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1190,
            'NM_PSGR' => 'HERCULES GONCALVES C. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/06/17',
            'CD_PAIS' => 'CO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 797,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1191,
            'NM_PSGR' => 'ROBSON CAMPOS DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/06/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 778,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1192,
            'NM_PSGR' => 'NASLY DE ALMEIDA SIXEL JULIANI',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1975/07/19',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 980,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1193,
            'NM_PSGR' => 'REGINALDO MARTINS SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/09/09',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 922,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1194,
            'NM_PSGR' => 'JOSE CARLOS CAROLINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/09/09',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 965,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1195,
            'NM_PSGR' => 'SEBASTIAO ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/09/13',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 311,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1196,
            'NM_PSGR' => 'FRANCISCO CARLOS SCHEFFER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/10/07',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 707,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1197,
            'NM_PSGR' => 'PAULO SERGIO DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/10/07',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 759,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1198,
            'NM_PSGR' => 'JOSE ADMILSON FREIRE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/10/07',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 728,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1199,
            'NM_PSGR' => 'HELIO ROBERTO BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/10/07',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 734,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1200,
            'NM_PSGR' => 'ELCIO AMORIM CARDOSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/10/11',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1112,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1201,
            'NM_PSGR' => 'RUFINO DE OLIVEIRA DOMINGOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 480,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1202,
            'NM_PSGR' => 'TEOFILO GOMES CAIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 452,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1203,
            'NM_PSGR' => 'CEZAR VITAL GAUDERETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 446,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1204,
            'NM_PSGR' => 'GERALDO ALMEIDA DE REZENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 499,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1205,
            'NM_PSGR' => 'ANTONIO DA SILVA MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/04',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 410,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1206,
            'NM_PSGR' => 'PAULO MARTINS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 258,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1207,
            'NM_PSGR' => 'GENTIL MOREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 233,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1208,
            'NM_PSGR' => 'JOSE LUIZ DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/11/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 246,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1209,
            'NM_PSGR' => 'EDUARDO ANTONIO TIMOTHEO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/12/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 271,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1210,
            'NM_PSGR' => 'FRANCISCO CARLOS MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/12/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 299,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1211,
            'NM_PSGR' => 'WANDERLEY LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/12/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 216,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1212,
            'NM_PSGR' => 'ADILSON FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/12/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 211,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1213,
            'NM_PSGR' => 'MARCO AURELIO F. BRAGA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/12/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 246,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1214,
            'NM_PSGR' => 'LIVIO DE SOUSA MARQUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/11',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 127,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1215,
            'NM_PSGR' => 'MARCOS ROBERTO DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 718,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1216,
            'NM_PSGR' => 'RENATO MATTA DE NAZARETH',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 763,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1217,
            'NM_PSGR' => 'CLAUDIO SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 709,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1218,
            'NM_PSGR' => 'ALVINO BRUNO MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/11',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 182,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1219,
            'NM_PSGR' => 'SILVIO MATEUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/11',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 127,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1220,
            'NM_PSGR' => 'SEBASTIAO VIEIRA RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/11',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 117,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1221,
            'NM_PSGR' => 'JORGE ROMUALDO DE AQUINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/12/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 273,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1222,
            'NM_PSGR' => 'CARLOS ROBERTO S. GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/07/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 783,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1223,
            'NM_PSGR' => 'ORLANDO MECENE FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1975/02/25',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 569,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1224,
            'NM_PSGR' => 'MARCIO LUIZ ITABORAY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/06/15',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 543,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1225,
            'NM_PSGR' => 'ANGELO MARCIANO LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/06/15',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 561,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1226,
            'NM_PSGR' => 'RICARDO CAMPELO DA CONCEICAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/06/15',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 525,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1227,
            'NM_PSGR' => 'JOSE GERALDO LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 306,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1228,
            'NM_PSGR' => 'CELSO ALCENIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 374,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1229,
            'NM_PSGR' => 'JOAO BATISTA DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 328,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1230,
            'NM_PSGR' => 'GILMAR CLAUDINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 356,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1231,
            'NM_PSGR' => 'JOSE DAS GRACAS DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 338,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1232,
            'NM_PSGR' => 'CLOVIS JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 315,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1233,
            'NM_PSGR' => 'MAURILIO COSME FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 371,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1234,
            'NM_PSGR' => 'MANOELITO JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 305,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1235,
            'NM_PSGR' => 'SEBASTIAO DE CASTRO NUNES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 787,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1236,
            'NM_PSGR' => 'JULIO CESAR DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/02/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 419,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1237,
            'NM_PSGR' => 'WILSON PAULO COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/02/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 448,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1238,
            'NM_PSGR' => 'ANTONIO CARLOS P. DE SA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/02/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 452,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1239,
            'NM_PSGR' => 'LUCAS DOMINGOS DE FARIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/03/23',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 390,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1240,
            'NM_PSGR' => 'LUIS FERNANDO B. DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/03/23',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 350,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1241,
            'NM_PSGR' => 'ROSEVELTER FERREIRA MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/03/23',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 314,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1242,
            'NM_PSGR' => 'RAIMUNDO NONATO EUGENIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/03/27',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 720,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1243,
            'NM_PSGR' => 'HERMES RODRIGUES MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/04/20',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 13,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1244,
            'NM_PSGR' => 'MARCOS VINICIOS C. CAZADIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/05/18',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 835,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1245,
            'NM_PSGR' => 'JOSE WANTUIL COUTINHO FINAMORE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/08/10',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 68,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1246,
            'NM_PSGR' => 'PATRICIA FONSECA SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/09/07',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 753,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1247,
            'NM_PSGR' => 'MAURI LISBOA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/12/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 451,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1248,
            'NM_PSGR' => 'PAULO HENRIQUE DUTRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/12/28',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 889,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1249,
            'NM_PSGR' => 'JUAREZ SILVEIRA DUTRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/02/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 848,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1250,
            'NM_PSGR' => 'SEBASTIAO SILVA JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/15',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 593,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1251,
            'NM_PSGR' => 'MANOEL GERONIMO MARIANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/15',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 555,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1252,
            'NM_PSGR' => 'ALDENOR AVELINO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 372,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1253,
            'NM_PSGR' => 'IAZIR SIRLEY QUETZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 322,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1254,
            'NM_PSGR' => 'JOAO DA SILVA RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 376,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1255,
            'NM_PSGR' => 'CARLOS ROBERTO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 392,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1256,
            'NM_PSGR' => 'LUZINETE RAIMUNDA DOS REIS',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 328,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1257,
            'NM_PSGR' => 'IRINEU CARNEIRO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 357,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1258,
            'NM_PSGR' => 'MANOEL RICARDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 344,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1259,
            'NM_PSGR' => 'RONALDO ANTONIO DE ARAUJO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 303,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1260,
            'NM_PSGR' => 'ROSEMEIRY DE CARVALHO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 344,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1261,
            'NM_PSGR' => 'ANGELA MARIA DE ALMEIDA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 360,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1262,
            'NM_PSGR' => 'MAGNA MARIA GONCALVES DE SOUZA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 307,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1263,
            'NM_PSGR' => 'MARIA MARGARIDA F. DE SOUZA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 334,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1264,
            'NM_PSGR' => 'SELMA REIS MACIEL SOARES',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 373,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1265,
            'NM_PSGR' => 'JOSE FERNANDES DA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 317,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1266,
            'NM_PSGR' => 'JOSE CARLOS CLAUDINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 332,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1267,
            'NM_PSGR' => 'JOSE MARIA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 386,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1268,
            'NM_PSGR' => 'EDMILSON FERREIRA DA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 342,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1269,
            'NM_PSGR' => 'MARIA EMILIA FINAMORE ROCHA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 366,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1270,
            'NM_PSGR' => 'PAULO DOS SANTOS FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 310,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1271,
            'NM_PSGR' => 'ALOISIO FERREIRA LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 364,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1272,
            'NM_PSGR' => 'JOSE GERALDO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 307,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1273,
            'NM_PSGR' => 'SEBASTIAO T. DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 364,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1274,
            'NM_PSGR' => 'GERALDO CANTARINO DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 333,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1275,
            'NM_PSGR' => 'GERALDO ANTONIO CORREA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 391,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1276,
            'NM_PSGR' => 'JOAQUIM ANTONIO VIDAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 332,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1277,
            'NM_PSGR' => 'JOAO BAPTISTA DO AMARAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 390,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1278,
            'NM_PSGR' => 'HELIO JOSE PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 374,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1279,
            'NM_PSGR' => 'ADEMAR AUGUSTO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 367,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1280,
            'NM_PSGR' => 'FRANCISCO TEODORO TRINDADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 397,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1281,
            'NM_PSGR' => 'GERALDO DE CASTRO RAIMUNDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 312,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1282,
            'NM_PSGR' => 'LUIZ DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 368,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1283,
            'NM_PSGR' => 'PAULO SERGIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 343,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1284,
            'NM_PSGR' => 'WANDERSON CAMPOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 347,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1285,
            'NM_PSGR' => 'WILSON APARECIDO SPINELLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 333,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1286,
            'NM_PSGR' => 'ODILON VITORELI DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 397,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1287,
            'NM_PSGR' => 'WANDER DIAS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 323,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1288,
            'NM_PSGR' => 'ZALDIVAR COSME DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 385,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1289,
            'NM_PSGR' => 'EVALDO BALBINO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 318,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1290,
            'NM_PSGR' => 'FRANCISCO DA COSTA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 302,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1291,
            'NM_PSGR' => 'SERGIO MURILO DA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 309,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1292,
            'NM_PSGR' => 'SEBASTIAO JULIO DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 347,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1293,
            'NM_PSGR' => 'PEDRO DAS GRACAS FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 354,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1294,
            'NM_PSGR' => 'SEBASTIAO XAVIER RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 300,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1295,
            'NM_PSGR' => 'PEDRO JOSE MOREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 372,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1296,
            'NM_PSGR' => 'SIDNEY VENANCIO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 308,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1297,
            'NM_PSGR' => 'EDMAR GERALDO RODRIGUES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 369,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1298,
            'NM_PSGR' => 'JOSE GERALDO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 389,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1299,
            'NM_PSGR' => 'RENATO PEREIRA GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 378,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1300,
            'NM_PSGR' => 'JOSE DIVINO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 382,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1301,
            'NM_PSGR' => 'ADAO VICENTE DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 365,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1302,
            'NM_PSGR' => 'JOSE CATARINO DE FREITAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 381,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1303,
            'NM_PSGR' => 'ROGERIO DIAS ABREU ABBUD',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 389,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1304,
            'NM_PSGR' => 'LUIZ CARLOS FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 910,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1305,
            'NM_PSGR' => 'PAULO PINTO KNOPP',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 930,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1306,
            'NM_PSGR' => 'SEBASTIAO DA SILVA FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 912,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1307,
            'NM_PSGR' => 'DENILSON ALCEU FIGUEIREDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/19',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 932,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1308,
            'NM_PSGR' => 'ELIMAR RODRIGUES LEITE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/03/23',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 394,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1309,
            'NM_PSGR' => 'JOSE AURILIO COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 738,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1310,
            'NM_PSGR' => 'ALEXANDRE MAGNO DE C. NOGUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/05/18',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 820,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1311,
            'NM_PSGR' => 'ALTIVO TEIXEIRA DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 353,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1312,
            'NM_PSGR' => 'SYLAS DE SOUZA ESTEVAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 351,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1313,
            'NM_PSGR' => 'LUIZ CLAUDIO TAVARES DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 336,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1314,
            'NM_PSGR' => 'MARCIO ELISIO ZAMPIER',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/01/23',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 303,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1315,
            'NM_PSGR' => 'ANTONIO CARLOS SOARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/04/24',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 487,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1316,
            'NM_PSGR' => 'GERALDO PEDRO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/07/13',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 310,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1317,
            'NM_PSGR' => 'REGINALDO HERMOGENES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/10/05',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 530,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1318,
            'NM_PSGR' => 'EDSON TEODORO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1976/03/23',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 396,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1319,
            'NM_PSGR' => 'JOSE ARISTIDES C. DE ANDRADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/05/17',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 790,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1320,
            'NM_PSGR' => 'ARY FERREIRA DOS S. JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/07/12',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 226,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1321,
            'NM_PSGR' => 'MARCO AURELIO E. MACHADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/07/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 80,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1322,
            'NM_PSGR' => 'GABRIEL ARCANJO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/07/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 55,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1323,
            'NM_PSGR' => 'JOSE SERGIO DA SILVEIRA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/08/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 906,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1324,
            'NM_PSGR' => 'LUIZ CLAUDIO SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/08/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 922,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1325,
            'NM_PSGR' => 'MATEUS EDUARDO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/08/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 907,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1326,
            'NM_PSGR' => 'SETIMO SOZZI NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/08/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 904,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1327,
            'NM_PSGR' => 'JOSE VILLANOVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/08/09',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 975,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1328,
            'NM_PSGR' => 'PAULO ANTONIO F. DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/09/06',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 674,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1329,
            'NM_PSGR' => 'RONALDO JOSE DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/10/04',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 481,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1330,
            'NM_PSGR' => 'REGINALDO PASQUALON',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/10/04',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 402,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1331,
            'NM_PSGR' => 'JOEL FERNANDES BITTENCOURT',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/11/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1116,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1332,
            'NM_PSGR' => 'EXPEDITO JOSE DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/11/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1159,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1333,
            'NM_PSGR' => 'EDEMIR GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/11/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 184,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1334,
            'NM_PSGR' => 'MARCIO GONCALVES HAUCK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 961,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1335,
            'NM_PSGR' => 'JOSE EDESIO DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 964,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1336,
            'NM_PSGR' => 'LUIS FERNANDO GUEDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/11/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 930,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1337,
            'NM_PSGR' => 'MARCOS ANTONIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/02/22',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 285,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1338,
            'NM_PSGR' => 'HUMBERTO MAURO DE A. LIMA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1977/02/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 224,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1339,
            'NM_PSGR' => 'MARCOS ROGERIO HADDAD',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/09/10',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 93,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1340,
            'NM_PSGR' => 'MAXLENE RAPOSO COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1977/02/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 221,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1341,
            'NM_PSGR' => 'LUCIANA BORBONI DELGADO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1978/07/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 315,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1342,
            'NM_PSGR' => 'RONALDO COURA FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/01/28',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 818,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1343,
            'NM_PSGR' => 'ANDRE VICENTE COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/01/28',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 878,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1344,
            'NM_PSGR' => 'CID MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/01/28',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 899,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1345,
            'NM_PSGR' => 'HILTON JOSE RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/02/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 108,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1346,
            'NM_PSGR' => 'ALEXANDER PAIVA KNEIPP',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/02/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 190,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1347,
            'NM_PSGR' => 'EDSON GERALDO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 643,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1348,
            'NM_PSGR' => 'TARCISIO JOSE DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 645,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1349,
            'NM_PSGR' => 'SEBASTIAO DA SILVA SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 638,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1350,
            'NM_PSGR' => 'RICARDO DA CRUZ BARRETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 653,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1351,
            'NM_PSGR' => 'FLAVIO CIMINO CAVALIERI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/07/11',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 122,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1352,
            'NM_PSGR' => 'MARCIO ISCOLD DUTRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 857,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1353,
            'NM_PSGR' => 'CARLOS ALBERTO LEANDRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 805,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1354,
            'NM_PSGR' => 'RONALDO ANTONIO NEVES TOSTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 807,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1355,
            'NM_PSGR' => 'LUIZ CARLOS TIBURCIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 881,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1356,
            'NM_PSGR' => 'JOSE RIBEIRO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 821,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1357,
            'NM_PSGR' => 'CELSON ALCANTARA DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 814,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1358,
            'NM_PSGR' => 'LUIZ HENRIQUE FAZZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/09/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 908,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1359,
            'NM_PSGR' => 'AIRTON FORTUNATO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/09/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 999,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1360,
            'NM_PSGR' => 'MARCOS HENRIQUE C. GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/10/03',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 377,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1361,
            'NM_PSGR' => 'PAULO SANCHES DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/10/03',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 320,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1362,
            'NM_PSGR' => 'JOSE MARIA GONCALVES COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/10/31',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1167,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1363,
            'NM_PSGR' => 'AMILTON DA CAMARA HAUCK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 829,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1364,
            'NM_PSGR' => 'GILBERTO SOZZI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 818,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1365,
            'NM_PSGR' => 'EUGENIO RODRIGUES FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/12/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 454,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1366,
            'NM_PSGR' => 'DANILO GERALDO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/09/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 966,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1367,
            'NM_PSGR' => 'JOSE BERTOLINO DOS S. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/10/03',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 394,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1368,
            'NM_PSGR' => 'PAULO ROGERIO DE PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/01/28',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 876,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1369,
            'NM_PSGR' => 'ELMAR DE CASTRO E PINTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/01/28',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 841,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1370,
            'NM_PSGR' => 'MIGUEL ARCANJO SALGADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/07/11',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 131,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1371,
            'NM_PSGR' => 'PERICLES DANIEL DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/08/08',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 847,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1372,
            'NM_PSGR' => 'ELIAS DE LIMA ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 821,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1373,
            'NM_PSGR' => 'CLAUDIO MIRANDA PEREIRA',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1978/11/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 898,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1374,
            'NM_PSGR' => 'RICARDO DE AQUINO DAMASCENO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 805,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1375,
            'NM_PSGR' => 'JOSE FRANCISCO GENEROSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/28',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 890,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1376,
            'NM_PSGR' => 'RONEY SANTHIAGO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/07/11',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 198,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1377,
            'NM_PSGR' => 'RONALDO CARLOS T. DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/07/11',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 135,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1378,
            'NM_PSGR' => 'ELVIA TRINDADE BRAGANCA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1978/04/22',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 278,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1379,
            'NM_PSGR' => 'JOSE FRANCISCO DOS SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/16',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 619,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1380,
            'NM_PSGR' => 'ALCIDES PEREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 83,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1381,
            'NM_PSGR' => 'JAEDER MARIO BICALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/05/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 9,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1382,
            'NM_PSGR' => 'EMILSON AMORIM MEDEIROS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/10/03',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 367,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1383,
            'NM_PSGR' => 'MAURICIO CONDESSA COURA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/04',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 494,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1384,
            'NM_PSGR' => 'GERSON FERREIRA DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 866,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1385,
            'NM_PSGR' => 'VALDEMAR ANTONIO RIVERA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1978/11/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 802,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1386,
            'NM_PSGR' => 'CRISTIANE ANDREIA F. MENDES',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1978/07/11',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 131,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1387,
            'NM_PSGR' => 'JOSE JOAO DA APARECIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/02/20',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1000,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1388,
            'NM_PSGR' => 'MARCO ANTONIO R. GALVAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/02/20',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 60,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1389,
            'NM_PSGR' => 'MARCOS VALERIO QUETZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/07/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 35,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1390,
            'NM_PSGR' => 'EDIVALDO DE BRITO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/08/07',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 700,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1391,
            'NM_PSGR' => 'LUIZ ANTONIO CALDERARI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/02',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 265,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1392,
            'NM_PSGR' => 'CELIO EDUARDO BARRETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/30',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1086,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1393,
            'NM_PSGR' => 'CARLOS FABIANO FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/30',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1079,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1394,
            'NM_PSGR' => 'FABIO ROMANO PINHEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/11/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 775,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1395,
            'NM_PSGR' => 'MARCOS ANTONIO DE CARVALHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/04/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 701,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1396,
            'NM_PSGR' => 'PAULO ZANCANELLI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/02',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 213,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1397,
            'NM_PSGR' => 'VALDEVINO PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/02',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 265,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1398,
            'NM_PSGR' => 'JOSE ALVES DE A. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/01/23',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 398,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1399,
            'NM_PSGR' => 'ALEXANDRE GONCALVES FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/04/17',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 772,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1400,
            'NM_PSGR' => 'JOSE EURICO COELHO DE ABREU',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/04/25',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 527,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1401,
            'NM_PSGR' => 'WALTENCIR SEVAROLLI CRESTON',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/06/12',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 296,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1402,
            'NM_PSGR' => 'GERALDO EDSON DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/07/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 87,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1403,
            'NM_PSGR' => 'FLAVIO STEINHERZ F. TOSCANO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/07/10',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 62,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1404,
            'NM_PSGR' => 'MARCOS EDGARD SILVESTRE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/01/23',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 308,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1405,
            'NM_PSGR' => 'JOSE LUIZ PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/01/23',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 363,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1406,
            'NM_PSGR' => 'ANTENOR ROZARIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/02/28',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 805,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1407,
            'NM_PSGR' => 'AGUINALDO OZORIO MARTINS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/06',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 629,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1408,
            'NM_PSGR' => 'JERONIMO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1979/10/06',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 617,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1409,
            'NM_PSGR' => 'ANA LUISA CERNIATO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1979/10/10',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1067,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1410,
            'NM_PSGR' => 'DAVI ANTUNES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 282,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1411,
            'NM_PSGR' => 'JOSE SYLVIO GONCALVES JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/02/19',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 945,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1412,
            'NM_PSGR' => 'EDMILSON ANTONIO AMORIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/04/19',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 962,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1413,
            'NM_PSGR' => 'JOSE GERALDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/07/08',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 815,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1414,
            'NM_PSGR' => 'JEFERSON TELES ANK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/08/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 538,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1415,
            'NM_PSGR' => 'HAMILTON REINOSO VENANCIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/08/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 540,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1416,
            'NM_PSGR' => 'MARIO DE MAGALHAES CABREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/09/30',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 96,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1417,
            'NM_PSGR' => 'ANDERSON SEBASTIAO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/07/08',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 856,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1418,
            'NM_PSGR' => 'JOAO CARLOS DE SOUZA RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/08/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 523,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1419,
            'NM_PSGR' => 'MARCELO DE MIRANDA CAMPOS',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1980/01/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 211,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1420,
            'NM_PSGR' => 'FERNANDO SERGIO S. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/08/05',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 527,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1421,
            'NM_PSGR' => 'JAMIRO PEDRO TEODORO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/02/19',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 945,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1422,
            'NM_PSGR' => 'ADMAR JESUS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/04/27',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 786,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1423,
            'NM_PSGR' => 'EDSON SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1980/05/13',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 349,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1424,
            'NM_PSGR' => 'TARCISIO MOREIRA PORTES',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1981/03/17',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 781,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1425,
            'NM_PSGR' => 'MAURO MARTINS COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/01/20',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 57,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1426,
            'NM_PSGR' => 'FRANCISCO DE ASSIS PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/02/17',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 784,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1427,
            'NM_PSGR' => 'ALVARO SIMOES DA C. NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/03/17',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 737,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1428,
            'NM_PSGR' => 'ANTONIO CARLOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/04/14',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 432,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1429,
            'NM_PSGR' => 'LUIZ FERNANDO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/08/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 436,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1430,
            'NM_PSGR' => 'FRANCISCO CARLOS NEVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/08/04',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 411,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1431,
            'NM_PSGR' => 'LUIZ CARLOS DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/09/29',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 914,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1432,
            'NM_PSGR' => 'JULIO CESAR DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/09/29',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 939,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1433,
            'NM_PSGR' => 'EDSON JOSE DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/09/29',
            'CD_PAIS' => 'KR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 941,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1434,
            'NM_PSGR' => 'CLAUDIO JOSE MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/10/27',
            'CD_PAIS' => 'PY',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 766,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1435,
            'NM_PSGR' => 'CARLOS ALBERTO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/03/17',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 777,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1436,
            'NM_PSGR' => 'LUIZ CARLOS ANTUNES BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/05/12',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 240,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1437,
            'NM_PSGR' => 'SILVESTRE RAIMUNDO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/05/12',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 236,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1438,
            'NM_PSGR' => 'FAUSTO EUSTAQUIO SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/05/12',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 249,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1439,
            'NM_PSGR' => 'VANTUIL PEREIRA NOGUEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/09/29',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 991,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1440,
            'NM_PSGR' => 'JOSE PASCOAL DE JESUS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/01/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 480,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1441,
            'NM_PSGR' => 'MARCELO CAMPOLINA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1981/04/26',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 636,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1442,
            'NM_PSGR' => 'CYRILO MOREIRA FERNANDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/02/15',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 531,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1443,
            'NM_PSGR' => 'MARCO AURELIO AMBROSIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/02/15',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 504,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1444,
            'NM_PSGR' => 'RODRIGO ANTONIO P. FIGESK',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/02/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 555,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1445,
            'NM_PSGR' => 'ROBSON DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/02/15',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 524,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1446,
            'NM_PSGR' => 'ALVARO ASSUNCAO DA SILVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/04/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 213,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1447,
            'NM_PSGR' => 'JORGE EDUARDO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/05/14',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 482,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1448,
            'NM_PSGR' => 'ANTONIO FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/05/14',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 429,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1449,
            'NM_PSGR' => 'MARCELO NOVAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/06/07',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 758,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1450,
            'NM_PSGR' => 'RAIMUNDO CESAR S. R. PINTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/06/07',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 701,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1451,
            'NM_PSGR' => 'MARCOS ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/06/11',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 156,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1452,
            'NM_PSGR' => 'ANTONIO FRANCISCO B. JUNIOR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/06/11',
            'CD_PAIS' => 'AR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 162,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1453,
            'NM_PSGR' => 'FLAVIO ALVES DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 551,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1454,
            'NM_PSGR' => 'ADALTON BATALHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 558,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1455,
            'NM_PSGR' => 'ADAO DE ASSIS MADELLA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 534,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1456,
            'NM_PSGR' => 'VILSON MARTINHO DE SAO JOSE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 541,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1457,
            'NM_PSGR' => 'TADEU FERREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 519,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1458,
            'NM_PSGR' => 'MARCO AURELIO PUGLIESE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 549,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1459,
            'NM_PSGR' => 'GERALDO TAVARES DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/07/05',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 588,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1460,
            'NM_PSGR' => 'JOSE DOS SANTOS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 287,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1461,
            'NM_PSGR' => 'MARCOS VINICIUS B. DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 286,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1462,
            'NM_PSGR' => 'JOSE LUIZ ARAUJO TOSTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 298,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1463,
            'NM_PSGR' => 'JOSE LUIZ DOS SANTOS COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 295,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1464,
            'NM_PSGR' => 'DELMIR DE AVELAR FRANCO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 214,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1465,
            'NM_PSGR' => 'ADMILSON MARTINS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/02',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 203,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1466,
            'NM_PSGR' => 'JOAO ERATO RIBEIRO LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 34,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1467,
            'NM_PSGR' => 'EDMAIR BALBINO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 52,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1468,
            'NM_PSGR' => 'NILTON RAIMUNDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/08/30',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 89,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1469,
            'NM_PSGR' => 'SEBASTIAO MARCIO R. DE PAIVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/09/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 724,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1470,
            'NM_PSGR' => 'WILSON GARCIA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/09/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 762,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1471,
            'NM_PSGR' => 'ANTONIO CARLOS WEBER CHAVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/09/27',
            'CD_PAIS' => 'SU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 710,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1472,
            'NM_PSGR' => 'CARLOS ROBERTO DO CARMO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/10/25',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 588,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1473,
            'NM_PSGR' => 'ANDERSON VALVERDE SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/11/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 243,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1474,
            'NM_PSGR' => 'ANTONIO CARLOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/03/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 321,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1475,
            'NM_PSGR' => 'PEDRO EURICO GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/03/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 313,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1476,
            'NM_PSGR' => 'CARLOS SERGIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/04/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 258,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1477,
            'NM_PSGR' => 'RODOLFO NEVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/04/12',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 251,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1478,
            'NM_PSGR' => 'JOSE ANTONIO GOMES DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/11/22',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 295,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1479,
            'NM_PSGR' => 'ROGERIO COURI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/03/23',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 337,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1480,
            'NM_PSGR' => 'ADILSON SIQUEIRA LIMA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/03/27',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 704,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1481,
            'NM_PSGR' => 'EUSTAQUIO CLAUDIO DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/04/20',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 60,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1482,
            'NM_PSGR' => 'ANALDIR BALDAIA PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1983/10/05',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 515,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1483,
            'NM_PSGR' => 'JOSE AUGUSTO VALLE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/01/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 739,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1484,
            'NM_PSGR' => 'SEBASTIAO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/01/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 789,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1485,
            'NM_PSGR' => 'GILMAR MATEUS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/01/17',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 744,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1486,
            'NM_PSGR' => 'JOSIMAR PEREIRA ALVIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/11/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 861,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1487,
            'NM_PSGR' => 'FRANCISCO CARLOS DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/04/18',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 873,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1488,
            'NM_PSGR' => 'ROBERTO MAURO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/04/18',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 869,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1489,
            'NM_PSGR' => 'CARLOS APARECIDO LUIZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1984/05/08',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 863,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1490,
            'NM_PSGR' => 'ANTONIO HORTALAN',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/03/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 253,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1491,
            'NM_PSGR' => 'SILVIO ALEIXO DO NASCIMENTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/03/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 216,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1492,
            'NM_PSGR' => 'RENATO MOREIRA DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/03/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 225,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1493,
            'NM_PSGR' => 'SEBASTIAO DA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/03/12',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 247,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1494,
            'NM_PSGR' => 'JOAO ULISSES CRISTINO FELIPE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/04/09',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 983,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1495,
            'NM_PSGR' => 'MARCIO DUARTE DA ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/04/09',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 985,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1496,
            'NM_PSGR' => 'JOSE ISIDORIO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/04/17',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 733,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1497,
            'NM_PSGR' => 'ADILSON JOSE FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/07/02',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 225,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1498,
            'NM_PSGR' => 'MARCIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/07/02',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 240,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1499,
            'NM_PSGR' => 'ALOISIO RODRIGUES AFONSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/07/30',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 70,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1500,
            'NM_PSGR' => 'ROBERTO CARLOS F. PRUDENCIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/07/30',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 14,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1501,
            'NM_PSGR' => 'LUIZ MARCELINO DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/07/30',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 92,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1502,
            'NM_PSGR' => 'EDSON WANDER DE O. BERNARDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/07/30',
            'CD_PAIS' => 'FR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 70,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1503,
            'NM_PSGR' => 'WALMIR DA COSTA ALVES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/09/24',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 468,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1504,
            'NM_PSGR' => 'ONILDO DE FREITAS MORAIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/09/24',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 486,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1505,
            'NM_PSGR' => 'JOSE ALBERTO DE MELLO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/09/24',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 404,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1506,
            'NM_PSGR' => 'FREDERICO MARCOS DE C. SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/09/24',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 423,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1507,
            'NM_PSGR' => 'CLAUDIO HENRIQUE QUITERIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 276,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1508,
            'NM_PSGR' => 'WILSON FRANCISCO DA S. BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 226,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1509,
            'NM_PSGR' => 'RONALDO VALENTIM DO AMARAL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/10/22',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 213,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1510,
            'NM_PSGR' => 'MARCO ANTONIO PEREIRA GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/12/17',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 746,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1511,
            'NM_PSGR' => 'ADRIANO SERGIO DIAS RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/12/17',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 728,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1512,
            'NM_PSGR' => 'ALCIDES PEDRO DAMIAO PAPA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/02/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 870,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1513,
            'NM_PSGR' => 'OSVALDO MARIANO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/06/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 39,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1514,
            'NM_PSGR' => 'MILTON FERREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1985/11/03',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 340,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1515,
            'NM_PSGR' => 'JOSE MARIA RAIMUNDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 106,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1516,
            'NM_PSGR' => 'ALOISIO ROSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/01/14',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 448,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1517,
            'NM_PSGR' => 'JOSE MARIA DA CONCEICAO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/04/08',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 806,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1518,
            'NM_PSGR' => 'HELDER FERNANDO ALVARENGA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/05/06',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 605,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1519,
            'NM_PSGR' => 'ANTONIO EXPEDITO DE REZENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/06/03',
            'CD_PAIS' => 'BO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 309,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1520,
            'NM_PSGR' => 'JOAO BATISTA ALVES DA COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 184,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1521,
            'NM_PSGR' => 'HAMILTON ALEXANDRE DE BARROS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 168,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1522,
            'NM_PSGR' => 'IRAN BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 161,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1523,
            'NM_PSGR' => 'VITOR HUGO BELTRAMI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/01',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 100,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1524,
            'NM_PSGR' => 'GILSON FABIO DE CASTRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/05',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 583,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1525,
            'NM_PSGR' => 'ROSINEI DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/05',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 597,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1526,
            'NM_PSGR' => 'OSNY JOSE ARANTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 996,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1527,
            'NM_PSGR' => 'ANATOLIO MIRANDA PASSOS',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 993,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1528,
            'NM_PSGR' => 'ALADIR EMANOEL DE MATTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 975,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1529,
            'NM_PSGR' => 'JOSE MARCOS DE BRITO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 995,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1530,
            'NM_PSGR' => 'EVERALDO RODRIGUES PIRES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 971,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1531,
            'NM_PSGR' => 'WANDER LUCIO DE SOUZA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 950,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1532,
            'NM_PSGR' => 'EDIVALDO APARECIDO MENDES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 942,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1533,
            'NM_PSGR' => 'ALEXANDRE PEREIRA DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 995,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1534,
            'NM_PSGR' => 'ALAIR DA ROCHA ABRANTES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 992,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1535,
            'NM_PSGR' => 'JOSE ANTONIO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 917,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1536,
            'NM_PSGR' => 'FLAVIO ROBERTO DA SILVA BRAGA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 993,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1537,
            'NM_PSGR' => 'JULIO CESAR AUGUSTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 930,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1538,
            'NM_PSGR' => 'JOSE MIGUEL PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 916,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1539,
            'NM_PSGR' => 'PAULO EUSTACHIO DOS REIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => 'AO',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 992,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1540,
            'NM_PSGR' => 'PAULO GRACINDO DIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/09',
            'CD_PAIS' => null,
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 999,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1541,
            'NM_PSGR' => 'JOAQUIM BECHARA NEDER COELHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/17',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 726,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1542,
            'NM_PSGR' => 'WALDEVINO RODRIGUES P. FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/17',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 750,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1543,
            'NM_PSGR' => 'EDSON DA SILVA BRASILINO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/17',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 774,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1544,
            'NM_PSGR' => 'CESAR JOSE DA CRUZ',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/17',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 798,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1545,
            'NM_PSGR' => 'JOSE MARIA GOMES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/17',
            'CD_PAIS' => 'CH',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 700,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1546,
            'NM_PSGR' => 'ALEXANDRE SIQUEIRA VALLE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 502,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1547,
            'NM_PSGR' => 'EDUARDO HENRIQUE DE F. SANTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 588,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1548,
            'NM_PSGR' => 'CARLOS EDUARDO LAWALL',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 591,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1549,
            'NM_PSGR' => 'LUIS GERALDO JULIANI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 545,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1550,
            'NM_PSGR' => 'ANTONIO LUIS DA NATIVIDADE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/25',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 577,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1551,
            'NM_PSGR' => 'CARLOS ALBERTO LOURENCO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 944,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1552,
            'NM_PSGR' => 'ROGERIO MARTINS DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 979,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1553,
            'NM_PSGR' => 'MARIO CESAR VILELA DE PAULA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/07/29',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 903,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1554,
            'NM_PSGR' => 'EDUARDO SANGY',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/06',
            'CD_PAIS' => 'MX',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 652,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1555,
            'NM_PSGR' => 'FRANSERGIO GOMES DELGADO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 59,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1556,
            'NM_PSGR' => 'ANTONIO CARLOS F. DE SOUSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/10',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 54,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1557,
            'NM_PSGR' => 'JULIO CARLOS DE MORAIS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 477,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1558,
            'NM_PSGR' => 'ALEXANDRE MENDES DE P. E SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/14',
            'CD_PAIS' => 'PT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 442,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1559,
            'NM_PSGR' => 'WAGNER FONTOURA DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/26',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 629,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1560,
            'NM_PSGR' => 'CLAUDIO EDUARDO PEIXOTO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/08/30',
            'CD_PAIS' => 'CN',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 9,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1561,
            'NM_PSGR' => 'GILBERTO DA SILVA BRETAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/09/03',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 376,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1562,
            'NM_PSGR' => 'MARCIO MENDONCA OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/09/27',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 760,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1563,
            'NM_PSGR' => 'WALLACE FRANCO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/09/27',
            'CD_PAIS' => 'TR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 741,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1564,
            'NM_PSGR' => 'DERMEVAL MESSIAS DE SOUSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1125,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1565,
            'NM_PSGR' => 'JOSE GERALDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/10/21',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1101,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1566,
            'NM_PSGR' => 'LUCIANO DE SOUZA MATTOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/10/25',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 595,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1567,
            'NM_PSGR' => 'JOAO BATISTA DE ALMEIDA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/11/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 888,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1568,
            'NM_PSGR' => 'CARLOS ALBERTO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/12/16',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 693,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1569,
            'NM_PSGR' => 'ANDRE LUIZ ALVES COSTA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/12/24',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 406,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1570,
            'NM_PSGR' => 'NICOLAU BITENCOURT DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/01/13',
            'CD_PAIS' => 'IT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 349,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1571,
            'NM_PSGR' => 'WESLEY NASCIMENTO INTROVIGNE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/11/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 835,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1572,
            'NM_PSGR' => 'VICENTE CELSO ESPOSITO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/12/16',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 692,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1573,
            'NM_PSGR' => 'MARIA APARECIDA DA SILVA',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1986/12/16',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 669,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1574,
            'NM_PSGR' => 'EDIVALDO MIRANDA DOS SANTOS',
            'IC_SEXO_PSGR' => '',
            'DT_NASC_PSGR' => '1986/11/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 884,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1575,
            'NM_PSGR' => 'ADILERCIO CANDIDO NETO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/11/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 850,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1576,
            'NM_PSGR' => 'OSNI MECENE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1986/11/18',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 873,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1577,
            'NM_PSGR' => 'LUIS ANTONIO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/02/18',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 820,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1578,
            'NM_PSGR' => 'ADILSON RIBEIRO DE REZENDE',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/06/22',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 294,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1579,
            'NM_PSGR' => 'SIDNEI VALLE SANT ANNA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/07/28',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 864,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1580,
            'NM_PSGR' => 'LUIZ ANTONIO FERREIRA LOPES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => null,
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 191,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1581,
            'NM_PSGR' => 'JULES LAGE SILVERIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/10/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1026,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1582,
            'NM_PSGR' => 'JOSE MARIA DE ALMEIDA TALHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/10/20',
            'CD_PAIS' => 'IL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 1079,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1583,
            'NM_PSGR' => 'ANDRE LUIS MELO MATIAS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/10/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 496,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1584,
            'NM_PSGR' => 'PAULO ROBERTO RIBEIRO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/10/28',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 837,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1585,
            'NM_PSGR' => 'EDSON TADEU PEREIRA DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/11/21',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 191,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1586,
            'NM_PSGR' => 'MARCILIO DA SILVA TAVARES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/01/12',
            'CD_PAIS' => 'EG',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 219,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1587,
            'NM_PSGR' => 'MARCELO SPATIM CAMPOS',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/10/24',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 412,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1588,
            'NM_PSGR' => 'SEBASTIAO CARLOS CARBOGIM',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/06/02',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 257,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1589,
            'NM_PSGR' => 'ELMO JOSE DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/07/04',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 448,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1590,
            'NM_PSGR' => 'JOSE ALBERTO ESCAMILHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1987/05/05',
            'CD_PAIS' => 'CU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 524,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1591,
            'NM_PSGR' => 'EDERSON DOS SANTOS PEREIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/04/13',
            'CD_PAIS' => 'NL',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 302,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1592,
            'NM_PSGR' => 'RAQUEL APARECIDA TOLENTINO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1988/07/26',
            'CD_PAIS' => 'US',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 685,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1593,
            'NM_PSGR' => 'GLAUCO FERNANDES GRUPPI',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/09/20',
            'CD_PAIS' => 'MZ',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 97,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1594,
            'NM_PSGR' => 'VITTORIO CARUSO FILHO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/10/02',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 239,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1595,
            'NM_PSGR' => 'RANDAL LOURENCO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/10/02',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 272,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1596,
            'NM_PSGR' => 'JOSE REIS VELOSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/09/20',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 56,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1597,
            'NM_PSGR' => 'EDSON PIRES DE SOUZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1988/03/08',
            'CD_PAIS' => 'VE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 823,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1598,
            'NM_PSGR' => 'RINGO FERREIRA PANZA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/03/07',
            'CD_PAIS' => 'UA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 794,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1599,
            'NM_PSGR' => 'JESUS ANSELMO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/04/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 459,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1600,
            'NM_PSGR' => 'PAULO SERGIO C. DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/05/02',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 242,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1601,
            'NM_PSGR' => 'JOSE GERALDO DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/08/22',
            'CD_PAIS' => 'AT',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 263,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1602,
            'NM_PSGR' => 'ROBERTO CARLOS MUNIZ GASPAR',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/09/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 903,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1603,
            'NM_PSGR' => 'MARCIO GERALDO BARBOSA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/09/19',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 901,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1604,
            'NM_PSGR' => 'WANDER BERNARDO DA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/11/14',
            'CD_PAIS' => 'CA',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 404,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1605,
            'NM_PSGR' => 'ISAEL FERNANDES TOLEDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/04/04',
            'CD_PAIS' => 'JP',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 487,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1606,
            'NM_PSGR' => 'PAULO HENRIQUE DA ROCHA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/06/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 731,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1607,
            'NM_PSGR' => 'IZABEL APARECIDA L. FIGUEIREDO',
            'IC_SEXO_PSGR' => 'F',
            'DT_NASC_PSGR' => '1989/06/27',
            'CD_PAIS' => 'ES',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 711,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1608,
            'NM_PSGR' => 'HENRIQUE GUILHERME F. M. SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1989/08/26',
            'CD_PAIS' => 'AU',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 684,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1609,
            'NM_PSGR' => 'PAULO ROBERTO R. GUIMARAES',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1990/01/09',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 971,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1610,
            'NM_PSGR' => 'EVANDRO JOVELINO DE OLIVEIRA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1990/06/26',
            'CD_PAIS' => 'PE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 685,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1611,
            'NM_PSGR' => 'LEONEL BRIZOLA RAIMUNDO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1990/08/21',
            'CD_PAIS' => 'SE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 108,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1612,
            'NM_PSGR' => 'EXPEDITO APARECIDO AFONSO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1990/07/24',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 470,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1613,
            'NM_PSGR' => 'AURELIO SCORALICK CUSTODIO',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1991/01/08',
            'CD_PAIS' => 'DE',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 837,
        ]);
        
        Passenger::create([
            'CD_PSGR' => 1614,
            'NM_PSGR' => 'ANTONIO WANDERLEY DA SILVA',
            'IC_SEXO_PSGR' => 'M',
            'DT_NASC_PSGR' => '1990/10/16',
            'CD_PAIS' => 'BR',
            'IC_ESTD_CIVIL' => 'S',
            'CD_PSGR_RESP' => 688,
        ]);
    }
}
