<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{
	public function run()
	{
		\DB::table('users')->insert(array (
					    'cedula'=>'21295782',
					   'pnombre'=>'Leonardo',
					   'usuario'=>'leonardo',
					  'password'=>\Hash::make('123456789'),
		 'password_confirmation'=>\Hash::make('123456789'),
					
	
		));\DB::table('users')->insert(array (
						'cedula'=>'21295783',
					   'pnombre'=>'Nathy',
					   'usuario'=>'nathy',
					  'password'=>\Hash::make('12345678'),
		 'password_confirmation'=>\Hash::make('12345678'),
					 
	
		));
	}
}