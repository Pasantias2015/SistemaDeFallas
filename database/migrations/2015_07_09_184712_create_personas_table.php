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
			$table->string('pnombre');
			$table->string('snombre');
			$table->string('papellido');
			$table->string('sapellido');
			$table->text('direccion');
			$table->date('fnacimiento');
			$table->enum('estadocivil',array('soltero(a)','casado(a)','divorciado(a)','viudo(a)'));
			$table->string('telefono-hab');
			$table->string('telefono-mov');
			$table->string('correo-electronico');
			$table->string('rif')->unique();
			$table->enum('sexo',array('Masculino','Femenino','Otro'));
			$table->decimal('estatura',5,2);
			$table->decimal('peso',5,2);
			$table->string('camisa');
			$table->string('pantalon');
			$table->string('zapato');
			$table->integer('profesion_id')->unsigned();
			$table->foreign('profesion_id')->references('id')->on('profesiones');
			$table->enum('nivel',array('ninguno','basico','bachiller','universitario'));
			$table->integer('parroquia_id')->unsigned();
			$table->foreign('parroquia_id')->references('id')->on('parroquias');
			$table->integer('hijos')->unsigned();
			$table->binary('foto');
			$table->enum('tipo-personal',array('operador','usuario'));

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
