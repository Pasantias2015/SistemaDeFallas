<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->string('combustible');
			$table->string('dimension');
			$table->string('year');
			$table->string('transmision');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modelos');
	}

}