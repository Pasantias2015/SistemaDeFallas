<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cajas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->string('mecanico'); 
			// $table->integer('mecanico_id')->unsigned();
			// $table->foreign('mecanico_id')->references('id')->on('mecanicos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cajas');
	}

}
