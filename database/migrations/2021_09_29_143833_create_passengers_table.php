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
            
            $table->string('NM_PSGR');
            $table->string('IC_SEXO_PSGR');
            $table->date('DT_NASC_PSGR');
            $table->unsignedBigInteger('CD_PAIS');
            $table->string('IC_ESTD_CIVIL');
            $table->unsignedBigInteger('CD_PSGR_RESP')->nullable();

            $table->foreign('CD_PAIS')->references('CD_PAIS')->on('itr_pais')->onDelete('cascade');
            $table->foreign('CD_PSGR_RESP')->references('CD_PSGR')->on('itr_psgr')->onDelete('cascade');
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
