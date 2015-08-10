<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciudades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('estado_id')->unsigned();
			$table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade')->onUpdate('cascade');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ciudades');
	}

}
