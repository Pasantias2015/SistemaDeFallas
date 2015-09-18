<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ModeloTableSeeder extends Seeder
{
	public function run()
	{
		\DB::table('modelos')->insert(array (
			'id'=>'1',
			'codigo'=>'ZK6118HGA',
			'descripcion'=>'Bus',
			'combustible'=>'Diesel',
			'dimension'=>'12',
			'transmision'=>'Sincronico',
			'marca_id'=>'1',
			));

		\DB::table('modelos')->insert(array (
			'id'=>'2',
			'codigo'=>'ZK6896HG',
			'descripcion'=>'Bus',
			'combustible'=>'Diesel',
			'dimension'=>'9',
			'transmision'=>'Sincronico',
			'marca_id'=>'1',
			));

		\DB::table('modelos')->insert(array (
			'id'=>'3',
			'codigo'=>'N6321',
			'descripcion'=>'Bus',
			'combustible'=>'Diesel',
			'dimension'=>'17',
			'transmision'=>'Sincronico',
			'marca_id'=>'2',
			));

		\DB::table('secciones')->insert(array (
			'id'=>'1',
			'codigo'=>'Sec1',
			'descripcion'=>'Ensayo de Motor',
			'modelo_id'=>'1'
			));

		\DB::table('secciones')->insert(array (
			'id'=>'2',
			'codigo'=>'Sec2',
			'descripcion'=>'Transmision',
			'modelo_id'=>'1'
			));
		\DB::table('grupos')->insert(array (
			'id'=>'1',
			'codigo'=>'1015-00053',
			'descripcion'=>'Motor de arranque',
			'seccion_id'=>'1'
			));

		\DB::table('grupos')->insert(array (
			'id'=>'2',
			'codigo'=>'9601-01450',
			'descripcion'=>'Volante y Cuña de Bloque',
			'seccion_id'=>'1'
			));

		\DB::table('grupos')->insert(array (
			'id'=>'3',
			'codigo'=>'TRM',
			'descripcion'=>'Ensayo de Transmision',
			'seccion_id'=>'2'
			));

		\DB::table('piezas')->insert(array (
			'id'=>'1',
			'codigo'=>'3708-00195',
			'descripcion'=>'Cepillo',
			'cantidad'=> '1',
			'grupo_id'=>'1'
			));

		\DB::table('piezas')->insert(array (
			'id'=>'2',
			'codigo'=>'1015-00176',
			'descripcion'=>'Motor de Arranque de Relé',
			'cantidad'=> '1',
			'grupo_id'=>'1'
			));

		\DB::table('piezas')->insert(array (
			'id'=>'3',
			'codigo'=>'1005-00242',
			'descripcion'=>'Sello de aceite trasero del asiento',
			'cantidad'=> '1',
			'grupo_id'=>'2'
			));

		\DB::table('piezas')->insert(array (
			'id'=>'4',
			'codigo'=>'1005-00930',
			'descripcion'=>'Sello de aceite trasero del asiento del anillo del sellado',
			'cantidad'=> '1',
			'grupo_id'=>'2'
			));

		\DB::table('piezas')->insert(array (
			'id'=>'5',
			'codigo'=>'PA88-1701-16-M',
			'descripcion'=>'Transmisión',
			'cantidad'=> '1',
			'grupo_id'=>'3'
			));

		\DB::table('herramientas')->insert(array (
			'id'=>'1',
			'codigo'=>'SM1',
			'descripcion'=>'Soporte Mecanico'
			));

		\DB::table('herramientas')->insert(array (
			'id'=>'2',
			'codigo'=>'TT1',
			'descripcion'=>'Taladro para Tuercas'
			));

		\DB::table('herramientas')->insert(array (
			'id'=>'3',
			'codigo'=>'AP1',
			'descripcion'=>'Alicate de Presión'
			));
		





	}
}