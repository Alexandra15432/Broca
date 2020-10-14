<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluadores', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',20);
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->date('fechadenacimiento');
            $table->string('direccion',50);
            $table->string('municipio',50);
            $table->string('correo',50);
            $table->bigInteger('tipo_evaluador_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipo_evaluador_id')->references('id')->on('tipoevaluadores');

              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluadores');
    }
}
