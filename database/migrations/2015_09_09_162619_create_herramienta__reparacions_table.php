<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerramientaReparacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('herramienta_reparaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('herramienta_id')->unsigned();
			$table->foreign('herramienta_id')->references('id')->on('herramientas');
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
		Schema::drop('herramienta_reparaciones');
	}

}
