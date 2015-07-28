<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionOperadorUnidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignacion_operador_unidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('operador_id')->unsigned();
			$table->foreign('operador_id')->references('id')->on('servicio_operadores');

			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidad_servicios');

			$table->date('fecha');


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
		Schema::drop('asignacion_operador_unidades');
	}

}
