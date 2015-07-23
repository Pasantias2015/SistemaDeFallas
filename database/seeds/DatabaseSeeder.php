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
		$this->call('UnidadTableSeeder');
		$this->call('PatioTableSeeder');
		$this->call('PuestoTableSeeder');
		$this->call('ServicioTableSeeder');
	}


}
