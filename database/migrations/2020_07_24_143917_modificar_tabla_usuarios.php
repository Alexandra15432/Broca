<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificarTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //

         
            $table->string('cedula',20);
          $table->unique('cedula');
            $table->string('apellidos',50);
            $table->date('fechadenacimiento');
            $table->string('direccion',50);
            $table->string('municipio',50);

          
            $table->bigInteger('tipo_evaluador_id')->unsigned();
      

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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
