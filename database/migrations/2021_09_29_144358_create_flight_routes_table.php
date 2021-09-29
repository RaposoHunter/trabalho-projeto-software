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
            
            $table->unsignedBigInteger('CD_ARPT_ORIG');
            $table->unsignedBigInteger('CD_ARPT_DEST');
            $table->double('VR_PASG');

            $table->foreign('CD_ARPT_ORIG')->references('CD_ARPT')->on('itr_arpt')->onDelete('cascade');
            $table->foreign('CD_ARPT_DEST')->references('CD_ARPT')->on('itr_arpt')->onDelete('cascade');
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
