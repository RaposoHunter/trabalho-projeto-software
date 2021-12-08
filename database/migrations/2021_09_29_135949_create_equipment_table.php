<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Ao utilizar o comando "php artisan migrate" este método é executado
        // e cria uma tabela com o nome e campos especificados

        Schema::create('itr_eqpt', function (Blueprint $table) {
            $table->string('CD_EQPT', 3);

            $table->string('NM_EQPT', 38);
            $table->string('DC_TIPO_EQPT', 13);
            $table->integer('QT_MOTOR');
            $table->enum('IC_TIPO_PRPS', ['M', 'R'])->comment('IC Tipo de Propulsor');
            $table->integer('QT_PSGR')->nullable();

            $table->primary('CD_EQPT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Ao requisitar "php artisan migrate:fresh" este método é executado
        // e realiza o DROP na tabela específica
        
        Schema::dropIfExists('itr_eqpt');
    }
}
