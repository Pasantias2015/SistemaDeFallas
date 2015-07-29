<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIncidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_incidencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('incidencia_id')->unsigned();
			$table->foreign('incidencia_id')->references('id')->on('incidencias');
			$table->integer('falla_id')->unsigned();
			$table->foreign('falla_id')->references('id')->on('fallas');
			$table->string('diagnostico');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_incidencias');
	}

}
