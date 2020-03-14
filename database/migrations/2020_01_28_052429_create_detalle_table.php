<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->text('estado');

            $table->unsignedInteger('asistencia_id');
            $table->foreign('asistencia_id')->references('id')->on('asistencia')->onDelete('cascade');

            $table->unsignedInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle');
    }
}
