<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo');
			$table->string('descripcion');
			$table->integer('modelo_id')->unsigned();
			$table->foreign('modelo_id')->references('id')->on('modelos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('secciones');
	}

}
