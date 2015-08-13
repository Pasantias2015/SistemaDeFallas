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
			$array[] = ['codigo'=> 'ZK68'.$i,
			'descripcion'=>'Modelo '.$i,
			'combustible'=>'Diesel',
			'dimension'=>'12 Mt',
			'transmision'=>'Sincronico'];

		}
		\DB::table('modelos')->insert($array);

	}
}