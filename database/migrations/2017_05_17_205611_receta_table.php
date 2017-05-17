<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('receta', function (Blueprint $table) {
             $table->increments('id');
             $table->date('fecha');
             $table->text('descripcion');
             $table->integer('id_paciente')->unsigned();
             $table->integer('id_medico')->unsigned();
             $table->foreign('id_paciente')->references('id')->on('pacientes');
             $table->foreign('id_medico')->references('id')->on('medicos');
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
       Schema::drop('receta');

     }
 }
