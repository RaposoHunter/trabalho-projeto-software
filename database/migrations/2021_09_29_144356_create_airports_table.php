<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_arpt', function (Blueprint $table) {
            $table->id('CD_ARPT');

            $table->unsignedBigInteger('CD_PAIS');
            $table->string('SG_UF', 2);
            $table->string('NM_CIDD');

            $table->foreign('CD_PAIS')->references('CD_PAIS')->on('itr_pais')->onDelete('cascade');
            $table->foreign('SG_UF')->references('SG_UF')->on('itr_uf')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_arpt');
    }
}
