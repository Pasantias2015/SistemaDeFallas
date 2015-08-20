<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMecanicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mecanicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('persona_id')->unsigned();
			$table->foreign('persona_id')->references('id')->on('personas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mecanicos');
	}

}
