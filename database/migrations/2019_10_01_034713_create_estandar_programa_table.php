<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstandarProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estandar_programa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('archivo')->nullable();
            $table->integer('calificacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('estandar_id');
            $table->unsignedBigInteger('programa_id');
            $table->foreign('estandar_id')->references('id')->on('estandares');
            $table->foreign('programa_id')->references('id')->on('programas');
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
        Schema::dropIfExists('estandar_programa');
    }
}
