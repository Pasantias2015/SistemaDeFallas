<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('cedula')->unique();
			$table->string('rif')->unique();
			$table->string('pasaporte')->unique();
			$table->string('pnombre');
			$table->string('snombre');
			$table->string('papellido');
			$table->string('sapellido');
			$table->date('fnacimiento');
			$table->string('sexo');
			$table->enum('estadocivil',array('soltero(a)','casado(a)','divorciado(a)','viudo(a)'));
			$table->string('correo-electronico');
			$table->integer('pais')->unsigned();
			$table->integer('estado')->unsigned();
			$table->integer('ciudad')->unsigned();
			$table->text('direccion');
			$table->string('telefono');
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
		Schema::drop('personas');
	}

} 
