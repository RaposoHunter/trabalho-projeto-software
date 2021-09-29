<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_voo', function (Blueprint $table) {
            $table->unsignedBigInteger('NR_VOO');
            
            $table->datetime('DT_SAIDA_VOO');
            $table->unsignedBigInteger('NR_ROTA_VOO');
            $table->unsignedBigInteger('CD_ARNV');

            $table->primary(['NR_VOO', 'DT_SAIDA_VOO']);
            $table->foreign('NR_ROTA_VOO')->references('NR_ROTA_VOO')->on('itr_rota_voo')->onDelete('cascade');
            $table->foreign('CD_ARNV')->references('CD_ARNV')->on('itr_arnv')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_voo');
    }
}
