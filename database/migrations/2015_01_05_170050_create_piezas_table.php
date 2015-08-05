<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('piezas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo');
			$table->string('descripcion');
			$table->integer('cantidad')->unsigned();
			$table->integer('grupo_id')->unsigned();
			$table->foreign('grupo_id')->references('id')->on('grupos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('piezas');
	}

}
