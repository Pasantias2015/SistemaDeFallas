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
			$table->string('supervisor');
			$table->integer('serviciounidadoperador_id')->unsigned();
			$table->foreign('serviciounidadoperador_id')->references('id')->on('servicio_unidad_operadores');
		  	$table->integer('kilometraje')->unsigned();
		  	$table->integer('gas')->unsigned();
			$table->string('lugar');
			$table->time('hora');
			$table->date('fecha');
			$table->integer('seccion_id')->unsigned();
			$table->foreign('seccion_id')->references('id')->on('secciones');
			$table->string('ocurrencia');//grupo donde ocurre falla
			$table->string('frecuencia');
			$table->string('condiciones');
			$table->time('aparicion');//hora aparacioon
			$table->integer('hservicio');//hora servicio
			$table->string('otrasobs');
			$table->string('detalle');
			$table->string('revisado');		
			$table->string('pendiente');		
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
