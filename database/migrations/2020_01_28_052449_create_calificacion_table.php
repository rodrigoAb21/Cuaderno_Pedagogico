<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->float('puntos');

            $table->unsignedInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('cascade');

            $table->unsignedInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('actividad')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion');
    }
}
