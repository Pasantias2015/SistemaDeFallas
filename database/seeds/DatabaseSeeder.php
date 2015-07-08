<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}
class UserTableSeeder extends Seeder
{
	public function run()
	{
		\DB::table('users')->insert(array (
		'pnombre' =>'Leonardo',
		'snombre' =>'Antonio',
		'papellido' =>'Loyo',
		'fnacimiento' =>'1991/03/14',
		'fingreso' =>'2015/05/01',
		'usuario' =>'leonardo',
		'password' =>\Hash::make('123456789'),
		'password_confirmation' =>\Hash::make('123456789'),
		'direccion' =>'Tarabana'
	
		));
	}
}
