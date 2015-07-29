<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioUnidadOperadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicio_unidad_operadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('operador_id')->unsigned();
			$table->foreign('operador_id')->references('id')->on('operadores');

			$table->integer('servicio_id')->unsigned();
			$table->foreign('servicio_id')->references('id')->on('operadores');
			
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('operadores');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicio_unidad_operadores');
	}

}
