<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolucionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soluciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('causa_id')->unsigned();
			$table->foreign('causa_id')->references('id')->on('causas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('soluciones');
	}

}
