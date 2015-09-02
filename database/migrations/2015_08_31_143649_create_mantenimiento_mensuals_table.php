<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoMensualsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_mensuales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->integer('serviciounidadoperador_id')->unsigned();
			$table->foreign('serviciounidadoperador_id')->references('id')->on('servicio_unidad_operadores');
			$table->string('liquidobat'); //nivel del liquido de la bateria
    			$table->integer('Litrosb'); //Cantidad de Litros completados a la bateria
    		$table->string('escobillas'); //revision de las escobillas de los limpia parabrisas
    		$table->string('filtros'); // revision de estado de filtro de la instalacion de aire
    		$table->string('liquidoven'); //nivel del liquido del accionamiento hidroestatico del ventilador
    			$table->integer('litrosven'); //cantidads de liquido completados al sistema del ventilador
    		$table->string('airepresion'); //liberacion de presion de aire
    		$table->string('filtroscomb'); //liberacion de agua del filtro de combustible
    		$table->string('forro'); //estado de forro del freno
    		$table->string('correas'); //Estado de las correas trapezoidale
    		$table->string('rejillas'); //Limpieza de las rejillas de filtrantes de recirculacion del Climatizador.


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_mensuales');
	}

}
