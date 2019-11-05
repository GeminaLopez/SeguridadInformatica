<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorredoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredores', function (Blueprint $table) {
            $table->increments('id_corredor');
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->dateTime('fecha_nac');
            $table->string('domicilio', 100);
            $table->integer('dni', 8);
            $table->string('email', 50);
            $table->string('telefono', 50);
            $table->string('comentarios', 140);
            // relaciones
            $table->unsignedInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos');
            $table->unsignedInteger('id_nacionalidad');
            $table->foreign('id_nacionalidad')->references('id_nacionalidad')->on('nacionalidades');
            $table->unsignedInteger('id_ciudad');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
            $table->unsignedInteger('id_provincia');
            $table->foreign('id_provincia')->references('id_provincia')->on('provincias');
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
        Schema::dropIfExists('corredores');
    }
}
