<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{
   public function run()
   {

      \DB::table('profesiones')->insert(array ('descripcion'=>'Operador'));
      \DB::table('profesiones')->insert(array ('descripcion'=>'Ingeniero'));
      \DB::table('profesiones')->insert(array ('descripcion'=>'Contador'));
      \DB::table('profesiones')->insert(array ('descripcion'=>'Administrador'));
      \DB::table('profesiones')->insert(array ('descripcion'=>'Mecanico'));

      \DB::table('paises')->insert(array ('descripcion'=>'VENEZUELA'));
       
      \DB::table('estados')->insert(array ('descripcion'=>'LARA','pais_id'=>1 ));
      \DB::table('estados')->insert(array ('descripcion'=>'ZULIA','pais_id'=>1  ));
    
      \DB::table('ciudades')->insert(array ('descripcion'=>'CABUDARE', 'estado_id'=>1  ));
      \DB::table('ciudades')->insert(array ('descripcion'=>'BARQUISIMETO', 'estado_id'=>1 ));
      
      \DB::table('municipios')->insert(array ( 'descripcion'=>'PALAVECINO','ciudad_id'=>1 ));
      \DB::table('municipios')->insert(array ('descripcion'=>'IRIBARREN','ciudad_id'=>2));
      
      \DB::table('parroquias')->insert(array ('descripcion'=>'CONCEPCION','municipio_id'=>1 )); 
      \DB::table('parroquias')->insert(array ('descripcion'=>'JUAN DE VILLEGAS','municipio_id'=>1));
      \DB::table('parroquias')->insert(array ('descripcion'=>'CATEDRAL','municipio_id'=>1 ));

      \DB::table('parroquias')->insert(array ('descripcion'=>'CABUDARE','municipio_id'=>2 ));
      \DB::table('parroquias')->insert(array ('descripcion'=>'AGUA VIVA','municipio_id'=>2 ));
      \DB::table('parroquias')->insert(array ('descripcion'=>'JOSE GREGORIO BASTIDAS','municipio_id'=>2 ));

      \DB::table('modulos')->insert(array ('descripcion'=>'Gestion De Operaciones'));
 
      \DB::table('coordinaciones')->insert(array ( 'codigo'=>1, 'nombre'=>'Telecomunicaciones'));
      \DB::table('coordinaciones')->insert(array ( 'codigo'=>1, 'nombre'=>'Centro de Control de Operaciones'));
      \DB::table('coordinaciones')->insert(array ( 'codigo'=>1, 'nombre'=>'Centro de Gestión Administrativa'));
	    \DB::table('coordinaciones')->insert(array ( 'codigo'=>1, 'nombre'=>'Gerencia de Servicio Tecnico'));

      \DB::table('cargos')->insert(array ('coordinacion_id'=>1,'nombre'=>'Supervisor(a)'));
      \DB::table('cargos')->insert(array ('coordinacion_id'=>2,'nombre'=>'Operador(a)'));
      \DB::table('cargos')->insert(array ('coordinacion_id'=>2,'nombre'=>'Supervisor de Patio'));
      \DB::table('cargos')->insert(array ('coordinacion_id'=>3,'nombre'=>'Auditor'));
      \DB::table('cargos')->insert(array ('coordinacion_id'=>4,'nombre'=>'Mecanico'));
      \DB::table('cargos')->insert(array ('coordinacion_id'=>4,'nombre'=>'Tecnico Mecanico'));
      \DB::table('cargos')->insert(array ('coordinacion_id'=>4,'nombre'=>'Ayudante Mecanico'));
       
       \DB::table('personas')->insert(array (
                       'cedula'=>'21295782',
                       'rif'=>'v212957824',
                       'pnombre'=>'Leonardo',
                       'snombre'=>'Antonio',
                       'papellido'=>'Loyo',
                       'fnacimiento'=>'1991-03-14',
                       'sexo'=>'masculino',
                       'cargo_id'=>3,
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'leonardo.l_91@hotmail.com',
                       'direccion'=>'Tarabana II',
                       'telefono-mov'=>'04245177331',
                       'profesion_id'=>1,
                       'parroquia_id'=>1));

       \DB::table('personas')->insert(array (
                       'cedula'=>'21295488',
                       'rif'=>'v212954884',
                       'pnombre'=>'Jaissel',
                       'snombre'=>'Nicol',
                       'papellido'=>'Perez',
                       'sapellido'=>'Marten',
                       'fnacimiento'=>'1992-04-02',
                       'sexo'=>'femenino',
                       'cargo_id'=>1,
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'jaissel92@gmail.com',
                       'direccion'=>'San Fco',
                       'telefono-mov'=>'04245333255',
                       'profesion_id'=>1,
                       'parroquia_id'=>1));

       \DB::table('personas')->insert(array (
                       'cedula'=>'21054664',
                       'rif'=>'v21054664',
                       'pnombre'=>'Dionel',
                       'snombre'=>'Enrique',
                       'papellido'=>'Linarez',
                       'sapellido'=>'Mendoza',
                        'cargo_id'=>3,
                       'fnacimiento'=>'1991-09-08',
                       'sexo'=>'masculino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'lenoid08@gmail.com',
                       'direccion'=>'Quibor',
                       'telefono-mov'=>'04245333255',
                       'profesion_id'=>1,
                       'parroquia_id'=>1));

      \DB::table('personas')->insert(array (
                       'cedula'=>'17362498',
                       'rif'=>'v17362498-7',
                       'pnombre'=>'Naudy',
                       'snombre'=>'Jose',
                       'papellido'=>'Camacho',
                       'Sapellido'=>'Velazquez',
                       'fnacimiento'=>'1984-02-12',
                       'sexo'=>'masculino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'naudy04@gmail.com',
                       'direccion'=>'Barquisimeto',
                       'telefono-mov'=>'04265502184',
                       'profesion_id'=>2,
                       'cargo_id'=>1,
                       'parroquia_id'=>1,
                        ));

      \DB::table('personas')->insert(array (
                       'cedula'=>'15448123',
                       'rif'=>'15448123-7',
                       'pnombre'=>'Eduar',
                       'snombre'=>'',
                       'papellido'=>'Lopez',
                       'Sapellido'=>'',
                       'fnacimiento'=>'1984-02-12',
                       'sexo'=>'masculino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'eduar04@gmail.com',
                       'direccion'=>'Barquisimeto',
                       'telefono-mov'=>'04264457587',
                       'profesion_id'=>5,
                       'cargo_id'=>5,
                       'parroquia_id'=>1,
                        ));

      \DB::table('personas')->insert(array (
                       'cedula'=>'12698551',
                       'rif'=>'12698551-7',
                       'pnombre'=>'Daniel',
                       'snombre'=>'',
                       'papellido'=>'Pérez',
                       'Sapellido'=>'',
                       'fnacimiento'=>'1984-02-12',
                       'sexo'=>'masculino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'daniel04@gmail.com',
                       'direccion'=>'Barquisimeto',
                       'telefono-mov'=>'04267894455',
                       'profesion_id'=>5,
                       'cargo_id'=>6,
                       'parroquia_id'=>1,
                        ));

      \DB::table('personas')->insert(array (
                       'cedula'=>'18856218',
                       'rif'=>'18856218-7',
                       'pnombre'=>'Hector',
                       'snombre'=>'',
                       'papellido'=>'Medina',
                       'Sapellido'=>'',
                       'fnacimiento'=>'1984-02-12',
                       'sexo'=>'masculino',
                       'estadocivil'=>'soltero(a)',
                       'correo-electronico'=>'hector@gmail.com',
                       'direccion'=>'Barquisimeto',
                       'telefono-mov'=>'04265476614',
                       'profesion_id'=>5,
                       'cargo_id'=>7,
                       'parroquia_id'=>1,
                        ));
   


       \DB::table('users')->insert(array (
                       'persona_id'=>1,
                       'usuario'=>'leonardo',
                     'password'=>\Hash::make('123456'),
        'password_confirmation'=>\Hash::make('123456'),
        'preguntas'=>'Alias',
        'respuestas'=>'chompiraa'
   
       ));
       \DB::table('users')->insert(array (
                       'persona_id'=>2,
                       'usuario'=>'jaissel',
                     'password'=>\Hash::make('123456'),
        'password_confirmation'=>\Hash::make('123456'),
        'preguntas'=>'Alias',
        'respuestas'=>'jai'
   
       ));
       \DB::table('users')->insert(array (
                       'persona_id'=>3,
                       'usuario'=>'Dionel',
                     'password'=>\Hash::make('123456'),
        'password_confirmation'=>\Hash::make('123456'),
        'preguntas'=>'Alias',
        'respuestas'=>'dio'
   
       ));

       \DB::table('users')->insert(array (
                       'persona_id'=>4,
                       'usuario'=>'naudy',
                     'password'=>\Hash::make('123456'),
        'password_confirmation'=>\Hash::make('123456'),
        'preguntas'=>'Alias',
        'respuestas'=>'naudy'
   
       ));



   }
}