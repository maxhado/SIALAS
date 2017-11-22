<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('distancia',8,2);
            $table->time('duracion');
            $table->integer('id_destino')->unsigned();
            $table->integer('id_origen')->unsigned();
            $table->float('tarifa');
            //Laves Foreing
            $table->foreign('id_destino')->references('id')->on('sucursales')->onDelete('cascade');
            $table->foreign('id_origen')->references('id')->on('sucursales')->onDelete('cascade');
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
        Schema::dropIfExists('rutas');
    }
}
