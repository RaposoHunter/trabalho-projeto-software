<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_resv', function (Blueprint $table) {
            $table->unsignedBigInteger('CD_PSGR');
            $table->integer('NR_VOO');
            $table->date('DT_SAIDA_VOO');
            
            $table->double('PC_DESC_PASG', 5, 2)->nullable();
            
            $table->primary(['CD_PSGR', 'NR_VOO', 'DT_SAIDA_VOO']);
            $table->foreign('CD_PSGR')->references('CD_PSGR')->on('itr_psgr');
            $table->foreign(['NR_VOO', 'DT_SAIDA_VOO'])->references(['NR_VOO', 'DT_SAIDA_VOO'])->on('itr_voo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_resv');
    }
}
