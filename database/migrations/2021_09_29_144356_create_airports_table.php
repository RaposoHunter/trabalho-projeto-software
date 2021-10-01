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
            $table->string('CD_ARPT', 3);
            
            $table->string('CD_PAIS', 2);
            $table->string('SG_UF', 2)->nullable();
            $table->string('NM_CIDD', 30);
            
            $table->primary('CD_ARPT');
            $table->foreign('CD_PAIS')->references('CD_PAIS')->on('itr_pais');
            $table->foreign('SG_UF')->references('SG_UF')->on('itr_uf');
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
