<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVuelosTripulantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos_tripulantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tripulante')->unsigned();
            $table->integer('id_vuelo')->unsigned();

            $table->foreign('id_tripulante')->references('id')->on('tripulantes')->onDelete('cascade');

            $table->foreign('id_vuelo')->references('id')->on('vuelos')->onDelete('cascade');
            
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
        Schema::dropIfExists('vuelos_tripulantes');
    }
}
