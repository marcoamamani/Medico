<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Citas\User;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         Model::unguard();

         $this->call('ClientesTableSeeder');
         $this->command->info('User table seeded!');


         Model::reguard();
     }
 }
 class ClientesTableSeeder extends Seeder
 {

     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {

         User::create([
             'nombres' => 'marco',
             'apellidos' => 'diaz ',
             'email' => 'marco3@gmail.com',
             'nombre_usuario' => 'marcom',
             'direccion' => 'calle 12334',
             'nivel' => '3',
             'password' => bcrypt('123456'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon:: now()
         ]);

     }

 }
