<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiernas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piernas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_aeronave')->unsigned();
            $table->integer('id_vuelo')->unsigned();
            $table->integer('id_ruta')->unsigned();
            $table->foreign('id_aeronave')->references('id')->on('aeronaves')->onDelete('cascade');
            $table->foreign('id_vuelo')->references('id')->on('vuelos')->onDelete('cascade');
            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade');
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
        Schema::dropIfExists('piernas');
    }
}
