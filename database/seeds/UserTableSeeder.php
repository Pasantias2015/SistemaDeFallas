<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{
	public function run()
	{
		\DB::table('personas')->insert(array (
					    'cedula'=>'21295782',
					    'rif'=>'v212957824',
					    'pasaporte'=>'123456789',
					    'pnombre'=>'Leonardo',
					    'snombre'=>'Antonio',
					    'papellido'=>'Loyo',
					    'fnacimiento'=>'1991-03-14',
					    'sexo'=>'M',
					    'estadocivil'=>'soltero(a)',
					    'correo-electronico'=>'leonardo.l_91@hotmail.com',
					    'pais'=>1,
					    'estado'=>1,
					    'ciudad'=>1,
					    'direccion'=>'Tarabana II',
					    'telefono'=>'04245177331'
					   		));


		\DB::table('users')->insert(array (
						'persona_id'=>1,
					    'usuario'=>'leonardo',
					  'password'=>\Hash::make('123456789'),
		 'password_confirmation'=>\Hash::make('123456789'),
		 'preguntas'=>'Alias',
		 'respuestas'=>'chompira'
	
		));

	}
}