<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestoUnidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('puesto_unidades', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');

			$table->integer('puesto_id')->unsigned();
			$table->foreign('puesto_id')->references('id')->on('puestos');

			$table->date('fecha-entrada');
			$table->date('fecha-salida');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('puesto_unidades');
	}

}
