<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{
   public function run()
   {

       \DB::table('profesiones')->insert(array ('descripcion'=>'Chofer'));
       \DB::table('profesiones')->insert(array ('descripcion'=>'Ingeniero'));
       \DB::table('paises')->insert(array ('descripcion'=>'VENEZUELA'));
       \DB::table('estados')->insert(array (
        'descripcion'=>'LARA',
        'pais_id'=>1
        ));
       \DB::table('estados')->insert(array (
        'descripcion'=>'ZULIA',
        'pais_id'=>1
        ));
       \DB::table('ciudades')->insert(array (
        'descripcion'=>'CABUDARE',
        'estado_id'=>1
        ));
       \DB::table('ciudades')->insert(array (
        'descripcion'=>'BARQUISIMETO',
        'estado_id'=>1
        ));
       \DB::table('municipios')->insert(array (
        'descripcion'=>'PALAVECINO',
        'ciudad_id'=>1
        ));
       \DB::table('municipios')->insert(array (
        'descripcion'=>'IRIBARREN',
        'ciudad_id'=>2
        ));
       \DB::table('parroquias')->insert(array (
        'descripcion'=>'AGUA VIVA',
        'municipio_id'=>1
        )); 
       \DB::table('parroquias')->insert(array (
        'descripcion'=>'JUAN DE VILLEGAS',
        'municipio_id'=>1
        ));
       
       \DB::table('personas')->insert(array (
                       'cedula'=>'21295782',
                       'rif'=>'v212957824',
                       'pnombre'=>'Leonardo',
                       'snombre'=>'Antonio',
                       'papellido'=>'Loyo',
                       'fnacimiento'=>'1991-03-14',
                       'sexo'=>'masculino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'leonardo.l_91@hotmail.com',
                       'direccion'=>'Tarabana II',
                       'telefono-mov'=>'04245177331',
                       'profesion_id'=>1,
                       'parroquia_id'=>1,
                              ));
       \DB::table('personas')->insert(array (
                       'cedula'=>'21295488',
                       'rif'=>'v212954884',
                       'pnombre'=>'Jaissel',
                       'snombre'=>'Nicol',
                       'papellido'=>'Perez',
                       'Sapellido'=>'Marten',
                       'fnacimiento'=>'1992-04-02',
                       'sexo'=>'femenino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'jaissel92@hotmail.com',
                       'direccion'=>'Tarabana II',
                       'telefono-mov'=>'04245333255',
                       'profesion_id'=>1,
                       'parroquia_id'=>1,
                              ));
       \DB::table('modulos')->insert(array (    'descripcion'=>'Gestion De Operaciones'));
       \DB::table('roles')->insert(array (    'descripcion'=>'Supervisor'));
       \DB::table('roles')->insert(array (    'descripcion'=>'Operador'));


       \DB::table('users')->insert(array (
                       'persona_id'=>1,
                       'rol_id'=>1,
                       'usuario'=>'leonardo',
                     'password'=>\Hash::make('123456'),
        'password_confirmation'=>\Hash::make('123456'),
        'preguntas'=>'Alias',
        'respuestas'=>'chompiraa'
   
       ));

   }
}