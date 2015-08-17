<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class MarcaTableSeeder extends Seeder
{
	public function run()
	{
			for($r = 1; $r <= 3; $r++)
			{
				$marca = [
							'nombre'=> "Marca ".$r,
							];
				\DB::table('marcas')->insert($marca);	
			}
		

	

	}
}
