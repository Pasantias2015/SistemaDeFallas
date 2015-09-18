<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenReparacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orden_reparaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('combustible');
			$table->string('aceitem');
			$table->string('aceitec');
			$table->date('fecha');
			$table->string('horainicio');
			$table->string('horafin');
			$table->string('tiempototal');
			$table->string('diagnostico');
			$table->string('descripcionuno');
			$table->string('descripciondos');
			$table->string('nivel');
			$table->integer('mantenimientocorrectivo_id')->unsigned();
			$table->foreign('mantenimientocorrectivo_id')->references('id')->on('mantenimiento_correctivos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orden_reparaciones');
	}

}
