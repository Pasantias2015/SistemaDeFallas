<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioLugarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicio_lugares', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lugar_id')->unsigned();
			$table->foreign('lugar_id')->references('id')->on('lugares');
			$table->integer('servicio_id')->unsigned();
			$table->foreign('servicio_id')->references('id')->on('servicios');
<<<<<<< HEAD
			$table->enum('estado',array('activo','inactivo'));
=======
			$table->enum('estado',array('activo','inactivo'));			 
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicio_lugares');
	}

}
