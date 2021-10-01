<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_pais', function (Blueprint $table) {
            $table->string('CD_PAIS', 2);
            
            $table->primary('CD_PAIS');
            $table->string('NM_PAIS', 25);
            $table->integer('QT_PPLC_PAIS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_pais');
    }
}
