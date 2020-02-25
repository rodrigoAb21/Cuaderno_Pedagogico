<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');

            $table->unsignedInteger('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('dimension')->onDelete('cascade');

            $table->unsignedInteger('trimestre_id');
            $table->foreign('trimestre_id')->references('id')->on('trimestre')->onDelete('cascade');

            $table->unsignedInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad');
    }
}
