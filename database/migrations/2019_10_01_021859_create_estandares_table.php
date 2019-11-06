<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstandaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estandares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_estandar',66);
            $table->unsignedBigInteger('factor_id');
            $table->foreign('factor_id')->references('id')->on('factores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estandares');
    }
}
