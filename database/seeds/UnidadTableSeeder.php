<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UnidadTableSeeder extends Seeder
{
	public function run()
	{
		
		\DB::table('unidades')->insert(array (
			'id'=>'1',
			'serialcarroceria'=>'CY123456789a',
			'nidentificacion'=>'Y-001',
			'serialmotor'=>'SY123456789a',
			'vin'=>'LZYTDGD64E1002252',
			'codigosistema'=>'',
			'uso'=>'Comercial',
			'modelo_id'=>'2',
			'year'=>'2014',
			));
		\DB::table('unidades')->insert(array (
			'id'=>'2',
			'serialcarroceria'=>'CY123456789b',
			'nidentificacion'=>'Y-002',
			'serialmotor'=>'SY123456789b',
			'vin'=>'LZYTDGD64E1002489',
			'codigosistema'=>'',
			'uso'=>'Comercial',
			'modelo_id'=>'2',
			'year'=>'2014',
			));

		\DB::table('unidades')->insert(array (
			'id'=>'3',
			'serialcarroceria'=>'CY123456789c',
			'nidentificacion'=>'Y-003',
			'serialmotor'=>'SY123456789c',
			'vin'=>'LZYTAGEF5C1009103',
			'codigosistema'=>'',
			'uso'=>'Comercial',
			'modelo_id'=>'1',
			'year'=>'2014',
			));

		\DB::table('unidades')->insert(array (
			'id'=>'4',
			'serialcarroceria'=>'CN123456789',
			'nidentificacion'=>'J330010',
			'serialmotor'=>'SN123456789',
			'vin'=>'NEOPGEF5C1009103',
			'codigosistema'=>'',
			'uso'=>'Comercial',
			'modelo_id'=>'3',
			'year'=>'2011',
			));
		

		
		$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

		for ($j = 1; $j < 3; $j++)
		{
			for($r = 0; $r < 3; $r++)
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


		\DB::table('fallas')->insert(array (
			'id'=>'1',
			'descripcion'=>'El motor no arranca, pero el arrancador gira.',
			'unidad_id'=>'4'));

		\DB::table('fallas')->insert(array (
			'id'=>'2',
			'descripcion'=>'El motor marcha de forma irregular, tiene fallos o no da plena potencia',
			'unidad_id'=>'4'));

		\DB::table('fallas')->insert(array (
			'id'=>'3',
			'descripcion'=>'Ruidos anormales',
			'unidad_id'=>'4'));

		\DB::table('fallas')->insert(array (
			'id'=>'4',
			'descripcion'=>'El motor "golpea" ',
			'unidad_id'=>'4'));

		\DB::table('causas')->insert(array (
			'id'=>'1',
			'causafalla'=>'Bateria con poca agua',
			'falla_id'=>'1'));

		\DB::table('causas')->insert(array (
			'id'=>'2',
			'causafalla'=>'Temperatura exterior demasiado baja',
			'falla_id'=>'1'));

		\DB::table('causas')->insert(array (
				'id'=>'3',
					'causafalla'=>'El tubo ascendente en el depósito de combustible presenta fugas',
					'falla_id'=>'2'));

		\DB::table('causas')->insert(array (
			'id'=>'4',
					'causafalla'=>'Transmisor de valor de pedal defectuoso. Cortocircuito',
					'falla_id'=>'2'));

		\DB::table('causas')->insert(array (
			'id'=>'5',
					'causafalla'=>'Hay estrias en la rueda compresora o en la rueda de turbina de la carcasa',
					'falla_id'=>'3'));

		\DB::table('causas')->insert(array (
			'id'=>'6',
					'causafalla'=>'Daño del cojinete en el cigüeñal o daño del pistón',
					'falla_id'=>'4'));

		\DB::table('soluciones')->insert(array (
			'id'=>'1',
					'descripcion'=>'Cargue la bateria',
					'causa_id'=>'1'));

		\DB::table('soluciones')->insert(array (
			'id'=>'2',
					'descripcion'=>'Tome en cuenta preparativos para el modo invierno',
					'causa_id'=>'2'));

		\DB::table('soluciones')->insert(array (
			'id'=>'3',
					'descripcion'=>'Compruebe y, si fuera necesario, sustituya el tubo ascendente',
					'causa_id'=>'3'));
		\DB::table('soluciones')->insert(array (
			'id'=>'4',
					'descripcion'=>'Compruebe y, si fuera necesario, sustituya el Cableado',
					'causa_id'=>'4'));

		\DB::table('soluciones')->insert(array (
			'id'=>'5',
					'descripcion'=>'Apague el motor inmediatamente, acuda al taller de servicio',
					'causa_id'=>'5'));






	}
}