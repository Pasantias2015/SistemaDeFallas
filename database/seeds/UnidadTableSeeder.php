<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UnidadTableSeeder extends Seeder
{
	public function run()
	{
		$arr = [];

		for ($i = 0; $i < 10; $i++)
		{
			$arr[] =[
				'serialcarroceria' => 'ZXCVBNM'.$i,
				'nidentificacion'  => 'Y-00'.$i,
				'serialmotor' 	   => '12345678'.$i,
				'vin'			   => 'ZXCASDQWE'.$i
			];
		}
		
		\DB::table('unidades')->insert($arr);
		
		$unidadmes = [];

		$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

		for ($j = 1; $j < 11; $j++)
		{
			for($r = 0; $r < 12; $r++)
			{
				if($r % 2)
				{
					$cond = 'Operativa';
				}
				else{
					$cond = 'Inoperativa';
				}
			
				$unidades = [
								'unidad_id' => $j,
								'mes'		=> $meses[$r],
								'condicion' => $cond			
								];
				\DB::table('unidad_condiciones')->insert($unidades);	
			}
		}
	}
}