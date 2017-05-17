<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('citas', function (Blueprint $table) {
             $table->increments('id');
             $table->time('hora');
             $table->date('fecha');
             $table->integer('id_recepcion')->unsigned();
             $table->integer('id_medico')->unsigned();
             $table->integer('id_paciente')->unsigned();
             $table->integer('id_especialidad')->unsigned();
             $table->foreign('id_recepcion')->references('id')->on('recepcion');
             $table->foreign('id_medico')->references('id')->on('medicos');
             $table->foreign('id_paciente')->references('id')->on('pacientes');
             $table->foreign('id_especialidad')->references('id')->on('especialidades');
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
         Schema::drop('citas');
     }
   }
