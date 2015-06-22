<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operadores', function(Blueprint $table)
		{
			$table->string('cedula')->unique();
			$table->string('pnombre',20);
			$table->string('snombre',20);
			$table->string('papellido',20);
			$table->string('sapellido',20)->nullable();
			$table->date('fnacimiento');
			$table->string('telefono',11);
			$table->string('telefonolaboral',11);
			$table->string('direccion',100);
			$table->rememberToken();
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
		Schema::drop('operadores');
	}

}
