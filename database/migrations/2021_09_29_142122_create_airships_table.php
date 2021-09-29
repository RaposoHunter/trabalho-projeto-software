<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_arnv', function (Blueprint $table) {
            $table->id('CD_ARNV');
            
            $table->unsignedBigInteger('CD_EQPT');
            $table->unsignedBigInteger('CD_CMPN_AEREA');

            $table->foreign('CD_EQPT')->references('CD_EQPT')->on('itr_eqpt')->onDelete('cascade');
            $table->foreign('CD_CMPN_AEREA')->references('CD_CMPN_AEREA')->on('itr_cmpn_aerea')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_arnv');
    }
}
