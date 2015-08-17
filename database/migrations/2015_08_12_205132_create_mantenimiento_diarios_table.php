<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoDiariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_diarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->integer('serviciounidadoperador_id')->unsigned();
			$table->foreign('serviciounidadoperador_id')->references('id')->on('servicio_unidad_operadores');
			$table->string('cnaceitem');
			$table->string('cnarefrigerante');
			$table->string('airene');
			$table->string('cncomb');
			$table->string('ceiasientos');
			$table->string('ceicarroceria');
			$table->string('ceeunidad');
			$table->string('cfrenos');
			$table->string('ccorrea');
			$table->string('cradiador');
			$table->string('ceseguridad');
			$table->string('cbornes');
			$table->string('cefluces');
			$table->string('celuces');
			$table->string('celucesem');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_diarios');
	}

}
