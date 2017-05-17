<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecepcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('recepcion', function (Blueprint $table) {
             $table->increments('id');
             $table->string('turno');
             $table->integer('id_usuario')->unsigned();
             $table->foreign('id_usuario')->references('id')->on('usuarios');
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
           Schema::drop('recepcion');
     }
 }
