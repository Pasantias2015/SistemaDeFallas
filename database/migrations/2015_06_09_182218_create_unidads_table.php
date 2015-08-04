<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('serialcarroceria')->unique();
			$table->string('nidentificacion')->unique();
			$table->string('vin')->unique();
			$table->string('serialmotor')->unique();
			$table->integer('modelo_id')->unsigned();
			//$table->string('potenciamotor');
			//$table->integer('kilometraje');
			//$table->integer('cantpersona');
			//$table->integer('pesomax');
			//$table->string('fabricante',10);
			//$table->date('ffabricacion');
			//$table->string('longitud',10);
			//$table->string('combustible',10);			
			//$table->rememberToken();
			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidades');
	}

}
