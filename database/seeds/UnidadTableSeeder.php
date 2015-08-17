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
				'vin'			   => 'ZXCASDQWE'.$i,
				'codigosistema'        => '4001'.$i,
				'uso'        => 'Comercial',
				'modelo_id'        => 1,
				'year'        => '2012',
			];
		}
		
		\DB::table('unidades')->insert($arr);
		
		

		$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

		for ($j = 1; $j < 11; $j++)
		{
			for($r = 0; $r < 12; $r++)
			{
				if($r % 2)
				{
					$operativa = 1;
					$inoperativa = 0;
				}
				else{
					$operativa = 0;
					$inoperativa = 1;
				}
			
				$unidades = [
								'unidad_id' => $j,
								'mes'		=> $meses[$r],
								'operativa' => $operativa,			
								'inoperativa' => $inoperativa			
								];
				\DB::table('unidad_condiciones')->insert($unidades);	
			}
		}
	}
}