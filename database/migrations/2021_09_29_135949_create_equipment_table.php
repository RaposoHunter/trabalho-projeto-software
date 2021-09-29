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
        Schema::create('itr_eqpt', function (Blueprint $table) {
            $table->id('CD_EQPT');

            $table->string('NM_EQPT');
            $table->longText('DC_TIPO_EQPT');
            $table->integer('QT_MOTO');
            $table->boolean('IC_TIPO_PRPS')->comment('IC Tipo de Propulsor (jato => 0 ou hélice => 1)');
            $table->integer('QT_PSGR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_eqpt');
    }
}
