<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('usuarios', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nombres');
             $table->string('apellidos');
             $table->string('email')->unique();
             $table->string('direccion');
             $table->string('nivel');
             $table->string('nombre_usuario')->unique();
             $table->string('password', 60);
             $table->rememberToken();
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
         Schema::drop('usuarios');
     }
}
