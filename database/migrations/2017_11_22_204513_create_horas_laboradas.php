<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasLaboradas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas_laboradas', function (Blueprint $table) {
            $table->increments('id');
      
            $table->timestamp('hora_entrada')->nullable();    
            $table->timestamp('hora_salida')->nullable();       
          
            $table->integer('id_administrativos')->unsigned();

            $table->foreign('id_administrativos')->references('id')->on('administrativos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    //Soluciones
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas_laboradas');

    }
}
