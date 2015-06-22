<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidades', function(Blueprint $table)
		{
			$table->string('serial')->unique();
			$table->string('nidentificacion',30)->unique();
			$table->string('vin',30)->unique();
			$table->string('serialmotor',30)->unique();
			$table->string('potenciamotor',10);
			$table->integer('kilometraje');
			$table->integer('cantpersona');
			$table->integer('pesomax',5);
			$table->string('fabricante',10);
			$table->date('ffabricacion');
			$table->string('longitud',10);
			$table->string('combustible',10);			
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
		Schema::drop('unidades');
	}

}
