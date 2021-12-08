<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    /*
     * Models são responsáveis por gerir os registros de cada tabela específica
     * além de alguma outras funcionalidade possíveis
    **/

    // Model responsável por gerir os registros referentes à Companhias Aéreas

    protected $table = 'itr_cmpn_aerea'; // Nome da tabela referenciada pelo model
    protected $primaryKey = 'CD_CMPN_AEREA'; // Chave primária da tabela
    protected $keyType = 'string'; // Tipo da chave primária
    public $incrementing = false; // Se a chave primária é AUTO_INCREMENT
    public $timestamps = false; // Se a tabela possui as colunas created_at e updated_at

    // Campos que podem ser preenchidos através dos métodos create() e update()
    protected $fillable = [
        'CD_CMPN_AEREA',
        'NM_CMPN_AEREA',
        'CD_PAIS',
    ];

    // Relacionamento para retornar as aeronaves que pertencem à companhia aérea
    public function airships()
    {
        return $this->hasMany(Airship::class, 'CD_CMPN_AEREA');
    }

    // Método para adicionar ao modelo a capacidade máxima de cada companhia aérea
    public function getPassengerCapacity()
    {
        $capacity = 0;

        $airships = $this->airships;

        foreach($airships as $airship) {
            $capacity += $airship->equipment->QT_PSGR;
        }

        unset($this->airships);
        $this->QT_TOTAL_PSGR = $capacity;
    }
}
