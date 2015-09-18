<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoSemanalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_semanales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->integer('horamotor');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');
    		$table->string('cnliquido'); //Llenado del liquido del limpia parabrisa
    			$table->integer('litrosl'); //Cantidad en litros de liquido completados
    		$table->string('presionc'); //Correccion de la presion de los cauchos
    			$table->integer('cantidadpre'); //cantidad de aire completado
    		$table->string('filtrosa'); //Limpieza de la estera de los filtros de aire acondicionado
    		$table->string('filtropre'); //Limpieza del filtro previo de combustible
    			$table->string('sustituido'); //Indica si ha sido o no sustituido o no el filtro previo de combustible
    		$table->string('cantrefrigerante'); //Chequeo del nivel de refrigerante
    			$table->integer('litrosref'); //Litros de refrigerante completado
    		$table->string('cantaceitem'); //chequeo del nivel de aceite de motor
    			$table->integer('litrosam'); //Litros de aceite de motro completados
    		$table->string('cantaceiteh'); //chequeo del nivel de aceite del sistema hidraulico
    			$table->integer('litroshidra'); //Cantidad de litos completados de aceite al sistema hidraulico
    		$table->string('fuelle');//revision del estado de los fuelles neumaticos
    			$table->string('reparado'); //especifica si fue o no reparado el fuelle de estar en mal estado


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_semanales');
	}

}
