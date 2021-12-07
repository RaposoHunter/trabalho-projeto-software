<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_rota_voo', function (Blueprint $table) {
            $table->id('NR_ROTA_VOO');
            
            $table->string('CD_ARPT_ORIG', 3);
            $table->string('CD_ARPT_DEST', 3);
            $table->double('VR_PASG', 8, 2)->nullable();
            
            $table->foreign('CD_ARPT_ORIG')->references('CD_ARPT')->on('itr_arpt');
            $table->foreign('CD_ARPT_DEST')->references('CD_ARPT')->on('itr_arpt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_rota_voo');
    }
}
