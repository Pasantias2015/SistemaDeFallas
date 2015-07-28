<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionRolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opcion_roles', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('opcion_id')->unsigned();
			$table->foreign('opcion_id')->references('id')->on('opciones');

			$table->integer('rol_id')->unsigned();
			$table->foreign('rol_id')->references('id')->on('roles');

			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opcion_roles');
	}

}
