<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_psgr', function (Blueprint $table) {
            $table->id('CD_PSGR');
            
            $table->string('NM_PSGR', 30);
            $table->string('IC_SEXO_PSGR', 1)->nullable();
            $table->string('DT_NASC_PSGR', 10)->nullable();
            $table->string('CD_PAIS', 2)->nullable();
            $table->enum('IC_ESTD_CIVIL', ['C', 'S']);
            $table->unsignedBigInteger('CD_PSGR_RESP')->nullable();

            $table->foreign('CD_PAIS')->references('CD_PAIS')->on('itr_pais');
            $table->foreign('CD_PSGR_RESP')->references('CD_PSGR')->on('itr_psgr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_psgr');
    }
}
