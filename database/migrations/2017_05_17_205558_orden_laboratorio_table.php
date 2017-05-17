<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('orden_laboratorio', function (Blueprint $table) {
             $table->increments('id');
             $table->time('hora');
             $table->date('fecha');
             $table->integer('id_medico')->unsigned();
             $table->integer('id_paciente')->unsigned();
             $table->integer('id_laboratorio')->unsigned();
             $table->foreign('id_medico')->references('id')->on('medicos');
             $table->foreign('id_paciente')->references('id')->on('pacientes');
             $table->foreign('id_laboratorio')->references('id')->on('laboratorios');
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
       Schema::drop('orden_laboratorio');
     }
   }
