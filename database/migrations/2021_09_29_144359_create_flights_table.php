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
            $table->integer('NR_VOO');
            
            $table->date('DT_SAIDA_VOO');
            $table->unsignedBigInteger('NR_ROTA_VOO');
            $table->string('CD_ARNV', 5);

            $table->primary(['NR_VOO', 'DT_SAIDA_VOO']);
            $table->foreign('NR_ROTA_VOO')->references('NR_ROTA_VOO')->on('itr_rota_voo');
            $table->foreign('CD_ARNV')->references('CD_ARNV')->on('itr_arnv');
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
