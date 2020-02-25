<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('apellido_paterno');
            $table->text('apellido_materno');
            $table->text('rude');
            $table->date('fnac');
            $table->text('ci');
            $table->integer('edad');
            $table->text('tutor');
            $table->text('direccion');
            $table->text('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}
