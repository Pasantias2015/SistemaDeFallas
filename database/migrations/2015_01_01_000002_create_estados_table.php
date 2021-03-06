<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('pais_id')->unsigned();
			$table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estados');
	}

}
