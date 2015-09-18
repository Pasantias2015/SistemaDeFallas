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
			$table->integer('causa_id')->unsigned();
			$table->foreign('causa_id')->references('id')->on('causas');
			$table->integer('solucion_id')->unsigned();
			$table->foreign('solucion_id')->references('id')->on('soluciones');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');
			$table->date('fecha');
			$table->time('horamotor');
			$table->integer('nivelcombus');
			$table->string('lugar');
    		$table->time('hora');
    		$table->string('freocurrencia');
    		$table->string('descripgeneral');

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
