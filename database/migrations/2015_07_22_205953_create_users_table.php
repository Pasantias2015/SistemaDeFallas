<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{	
			$table->increments('id');
			
			$table->integer('persona_id')->unsigned();
			$table->foreign('persona_id')->references('id')->on('personas');

			$table->string('usuario')->unique();
			$table->string('password',60);
			$table->string('password_confirmation',60);
			$table->string('preguntas');
			$table->string('respuestas');		 	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
