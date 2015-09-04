<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoDiariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_diarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');
			$table->string('cnaceitem');//Chequeo Nivel de Aceite del Motor
				$table->integer('litrosr'); //Litros Completados
			$table->string('cnrefrigerante');//Chequeo Nivel de Refrigerante
				$table->integer('litrosa'); //Litros Completados
			$table->string('frefrigerante');//Existe Fuga de refrigerante
				 $table->string('reparado');//reparacion de fuga al momento
			$table->string('airene');//Chequeo de la Presión de Aire de los Neumáticos
				$table->integer('aire');//Aire Completado
			$table->string('cncomb');//Chequeo del Nivel de Combustible
				$table->string('combust');//Tipo de Combustible
				$table->integer('diesel');//litros Completados
				$table->integer('gas');//MPa Completados
			$table->string('ceiasientos');//Chequeo del Estado Interior de la Unidad: Asientos
				$table->integer('asientosmal');//asientos en mal estado
			$table->string('ceecarroceria');//Chequeo del Estado Exterior de la Unidad: Carroceria y Vidrios
				$table->integer('rayones');//total rayones
				$table->integer('vidrios');//total vidrios
			$table->string('ccorrea');//Chequeo del Estado de las Correas(tensión, estado fisico)
				$table->string('acorrea');//ajuste correas
				$table->string('camcorrea');//cambio correas
			$table->string('ceseguridad');//Chequeo del Equipo de Seguridad (triángulo, extintor, conos)
				$table->string('triangulo');//falta triangulo
				$table->string('extintor');//falta extintor
				$table->string('conos');//falta cono
			$table->string('ceflucesi');//Chequeo del Estado Fisico de las Luces Internas
				$table->integer('lucesimal');//total Luces Internas mal estado
			$table->string('celucesi');//Chequeo del Encendido de las Luces Internas
				$table->integer('elucesimal');//total luces internas q no encienden
			$table->string('celucese');//Chequeo del Estado Fisico de las Luces Externas<
				$table->string('ddere');//Delantero Derecho
				$table->string('dizqe');//Delantero Izquierdo
				$table->string('tdere');//Trasero Derecho
				$table->string('tizqe');//Trasero Izquierdo
			$table->string('celucesc');//Chequeo del Encendido de las Luces de Cruce
				$table->string('dderc');//Delantero Derecho
				$table->string('dizqc');//Delantero Izquierdo
				$table->string('tderc');//Trasero Derecho
				$table->string('tizqc');//Trasero Izquierdo
			$table->string('celucesem');//Chequeo del Encendido de las Luces de Emergencia
				$table->string('dderem');//Delantero Derecho
				$table->string('dizqem');//Delantero Izquierdo
				$table->string('tderem');//Trasero Derecho
				$table->string('tizqem');//Trasero Izquierdo
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_diarios');
	}

}
