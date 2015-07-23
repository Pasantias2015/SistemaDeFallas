<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ServicioTableSeeder extends Seeder
{
	public function run()
	{
		$arr = ['Linea 1','Linea 2','Linea 3','Ruta 601','Ruta 602','Ruta 603','Rauta 802','Ruta 803','Ruta 804','Servicio Especial'];
		for($i = 0;$i<10;$i++)
		{
			$array[] = ['descripcion'=>$arr[$i]];

		}
		\DB::table('servicios')->insert($array);

	}
}