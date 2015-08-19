<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoCorrectivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_correctivos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lugar');  
			$table->date('fecha');
			$table->string('hora');
			$table->string('sitioocurrencia');//grupo donde ocurre falla
			$table->string('frecuencia');
			$table->string('ruta');
			$table->string('haparacion');//hora aparacioon
			$table->string('hservicio');//hora servicio
			$table->string('condiciones');
			$table->string('observaciones');
			$table->string('descripcion');
			// $table->integer('servicionunidadoperador_id')->unsigned();
			// $table->foreign('servicionunidadoperador_id')->references('id')->on('servicio_unidad_operadores');
			// $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')->on('users');
			// $table->integer('seccion_id')->unsigned();
			// $table->foreign('seccion_id')->references('id')->on('secciones');
		});
	}
		
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_correctivos');
	}

}
