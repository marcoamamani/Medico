<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoriaClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->integer('id_cita')->unsigned();
            $table->integer('id_medico')->unsigned();
            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_cita')->references('id')->on('citas');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->foreign('id_paciente')->references('id')->on('pacientes');
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
        Schema::drop('historia_clinica');
    }
}
