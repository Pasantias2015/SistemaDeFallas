<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('almacenes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo');
			$table->string('descripcion');
			$table->integer('cantidad')->unsigned();;
			$table->string('tipo');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('almacenes');
	}

}
