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
            $table->string('CD_ARNV', 5);
            
            $table->string('CD_EQPT', 3);
            $table->string('CD_CMPN_AEREA', 2);
            
            $table->primary('CD_ARNV');
            $table->foreign('CD_EQPT')->references('CD_EQPT')->on('itr_eqpt')->onDelete('restrict');
            $table->foreign('CD_CMPN_AEREA')->references('CD_CMPN_AEREA')->on('itr_cmpn_aerea')->onDelete('restrict');
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
