<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSolicitudsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_solicitudes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('solicitud_id')->unsigned();
			$table->foreign('solicitud_id')->references('id')->on('solicitudes');
			$table->integer('almacen_id')->unsigned();
			$table->foreign('almacen_id')->references('id')->on('almacenes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_solicitudes');
	}

}
