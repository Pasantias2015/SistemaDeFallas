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
<<<<<<< HEAD
		//$this->call('UnidadTableSeeder');
=======
>>>>>>> 93b56bdc1798d0e023802d6c357ae69c9941718c
		$this->call('PatioTableSeeder');
		$this->call('PuestoTableSeeder');
		$this->call('ServicioTableSeeder');
		$this->call('ModeloTableSeeder');
		$this->call('UnidadTableSeeder');
	}


}
