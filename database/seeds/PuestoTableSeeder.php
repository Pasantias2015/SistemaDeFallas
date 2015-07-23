<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PuestoTableSeeder extends Seeder
{
	public function run()
	{
		for ($j = 1; $j <= 3; $j++)
		{
			for($r = 1; $r <= 10; $r++)
			{
				$puestos = [
								'patio_id'   => $j,
								'descripcion'=> $r,
							];
				\DB::table('puestos')->insert($puestos);	
			}
		}

	

	}
}
