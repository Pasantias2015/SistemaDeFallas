<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        \DB::table('profesiones')->insert(array ('descripcion'=>'chofer'));
        \DB::table('parroquias')->insert(array ('descripcion' => 'cabudare'));
        

=======

        \DB::table('profesiones')->insert(array ('descripcion'=>'chofer'));
        \DB::table('parroquias')->insert(array ('descripcion'=>'cabudare'));
        
>>>>>>> 354dde711095028203ff51265787f5479bd10bd9
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
<<<<<<< HEAD
                        'profesion_id' => 1,
                        'parroquia_id' => 1
=======
                        'profesion_id'=>1,
                        'parroquia_id'=>1,
>>>>>>> 354dde711095028203ff51265787f5479bd10bd9
                               ));
        \DB::table('modulos')->insert(array (    'descripcion'=>'Gestion De Operaciones'));
        \DB::table('roles')->insert(array (    'descripcion'=>'Supervisor'));


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