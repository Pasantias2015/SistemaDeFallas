<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFallasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fallas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fallas');
	}

}
