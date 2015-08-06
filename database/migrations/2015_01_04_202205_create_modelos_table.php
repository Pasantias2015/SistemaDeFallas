<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo'); //codigo del modelo que traen por defecto los vehiculos
			$table->string('descripcion'); //si es bus, grua u otro
			$table->string('combustible'); //diesel o gas
			$table->string('dimension'); //tamaño 
			$table->string('year');
			$table->string('transmision'); //automatico o sincronico
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modelos');
	}

}
