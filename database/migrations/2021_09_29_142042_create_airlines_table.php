<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_cmpn_aerea', function (Blueprint $table) {
            $table->id('CD_CMPN_AEREA');

            $table->string('NM_CMPN_AEREA');
            $table->unsignedBigInteger('CD_PAIS');

            $table->foreign('CD_PAIS')->references('CD_PAIS')->on('itr_pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_cmpn_aerea');
    }
}
