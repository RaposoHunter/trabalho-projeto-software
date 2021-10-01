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
            $table->string('CD_EQPT', 3);

            $table->string('NM_EQPT', 38);
            $table->string('DC_TIPO_EQPT', 13);
            $table->integer('QT_MOTO');
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
        Schema::dropIfExists('itr_eqpt');
    }
}
