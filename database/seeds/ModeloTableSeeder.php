<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ModeloTableSeeder extends Seeder
{
	public function run()
	{
		$arr = [];
		for($i = 1;$i<=3;$i++)
		{
			$array[] = ['descripcion'=>'Modelo '.$i,
			'combustible'=>'Diesel',
			'dimension'=>'12 Mt',
			'year'=>'2015',
			'transmision'=>'Sincronico'];

		}
		\DB::table('modelos')->insert($array);

	}
}