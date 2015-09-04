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
			$table->increments('id');
			$table->integer('persona_id')->unsigned();
			$table->foreign('persona_id')->references('id')->on('personas');
			
			$table->string('estado');
			$table->date('fechaasignacion');
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
