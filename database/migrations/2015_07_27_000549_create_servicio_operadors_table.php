<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioOperadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicio_operadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('servicio_id')->unsigned();
			$table->foreign('servicio_id')->references('id')->on('servicios');

			$table->integer('operador_id')->unsigned();
			$table->foreign('operador_id')->references('id')->on('operadores');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicio_operadores');
	}

}
