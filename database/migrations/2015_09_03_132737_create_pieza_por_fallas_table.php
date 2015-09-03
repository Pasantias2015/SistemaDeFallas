<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezaPorFallasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pieza_por_fallas', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer('id_piezaneoplan')->unsigned();
			$table->foreign('id_piezaneoplan')->references('id')->on('pieza_neoplans');
			$table->integer('id_porfallas')->unsigned();
			$table->foreign('id_porfallas')->references('id')->on('mantenimiento_porfallas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pieza_por_fallas');
	}

}
