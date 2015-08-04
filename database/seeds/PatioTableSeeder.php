<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PatioTableSeeder extends Seeder
{
	public function run()
	{
		$arr = [];
		for($i = 1;$i<=3;$i++)
		{
			$array[] = ['descripcion'=>'Patio '.$i];

		}
		\DB::table('patios')->insert($array);

	}
}