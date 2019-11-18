<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArchivoToPruebas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pruebas', function (Blueprint $table) {
            $table->string('archivo')->after('id')->default('archivo.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pruebas', function (Blueprint $table) {
            $table->dropColumn('archivo');
        });
    }
}
