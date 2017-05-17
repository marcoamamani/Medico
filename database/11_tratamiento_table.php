<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
              $table->integer('id_paciente')->unsigned();
                $table->integer('id_medico')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('paciente');
            $table->foreign('id_medico')->references('id')->on('medico');
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
        Schema::drop('tratamiento');
    }
}
