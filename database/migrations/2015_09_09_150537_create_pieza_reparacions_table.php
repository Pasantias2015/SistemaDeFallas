<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezaReparacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pieza_reparaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pieza_id')->unsigned();
			$table->foreign('pieza_id')->references('id')->on('piezas');
			$table->integer('orden_id')->unsigned();
			$table->foreign('orden_id')->references('id')->on('orden_reparaciones');
			$table->string('descripcion');
			$table->integer('cantidad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pieza_reparaciones');
	}

}
