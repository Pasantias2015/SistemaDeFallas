<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadCondicionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidad_condiciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');
			$table->string('condicion');
			$table->string('mes');

			
			

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidad_condiciones');
	}

}
