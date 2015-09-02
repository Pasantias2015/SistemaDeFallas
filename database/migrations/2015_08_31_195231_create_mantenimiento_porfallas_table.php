<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoPorfallasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_porfallas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('falla_id')->unsigned();
			$table->foreign('falla_id')->references('id')->on('fallas');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->integer('serviciounidadoperador_id')->unsigned();
			$table->foreign('serviciounidadoperador_id')->references('id')->on('servicio_unidad_operadores');
			$table->date('fecha');
			$table->time('horamotor');
			$table->integer('nivelcombus');
			$table->string('lugar');
    		$table->time('hora');
    		$table->string('freocurrencia');
    		$table->string('DescripcionGeneral');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_porfallas');
	}

}
