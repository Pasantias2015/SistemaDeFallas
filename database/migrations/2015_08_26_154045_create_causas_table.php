<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('causas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('causafalla');
			$table->integer('falla_id')->unsigned();
			$table->foreign('falla_id')->references('id')->on('fallas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('causas');
	}

}
