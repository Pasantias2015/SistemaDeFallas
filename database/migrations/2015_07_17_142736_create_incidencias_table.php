<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('unidadoperador_id')->unsigned();
			$table->foreign('unidadoperador_id')->references('id')->on('unidad_operadores');
			$table->integer('falla_id')->unsigned();
			$table->foreign('falla_id')->references('id')->on('fallas');
			$table->string('descripcion');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('incidencias');
	}

}
