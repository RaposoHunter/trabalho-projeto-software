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
            $table->string('CD_CMPN_AEREA', 2);
            
            $table->string('NM_CMPN_AEREA', 22);
            $table->string('CD_PAIS', 2)->nullable();
            
            $table->primary('CD_CMPN_AEREA');
            $table->foreign('CD_PAIS')->references('CD_PAIS')->on('itr_pais')->onDelete('restrict');
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
