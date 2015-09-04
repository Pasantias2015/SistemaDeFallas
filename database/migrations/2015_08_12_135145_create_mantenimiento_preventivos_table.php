<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoPreventivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_preventivos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');	
			$table->integer('unidad_id')->unsigned();
			$table->foreign('unidad_id')->references('id')->on('unidades');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->decimal('kilometraje',10,2);		    
			$table->string('rlfiltroa');//revision y limpieza filtro de aire
			$table->string('clubricante');//cambio lubricante motor
			$table->integer('litrosr');//litros completado
			$table->string('cfaceite');//cambio filtro de aceite
			$table->integer('litrosa');
			$table->string('lfcombustible');//lavado del filtro de combustible
			$table->integer('litroscom');
			$table->string('rlineascom');//revision de las lineas combustible descarte de fuga
			$table->string('fugarep');//fuga combustible
			$table->string('rrefrigerante');//revision (descarte de fuga) de refrigerante
			$table->string('fugaref');//fuga refrigerante
			$table->string('rcorrea'); //revision de correa
			$table->string('ccorrea');//Cambio de Correa
			$table->integer('correascamb');
			$table->string('tapasr');
			$table->string('rtapasr'); //revision de las tapas de radiador
			$table->string('ctapas');//cambio de tapas
			$table->string('lavadom');//lavado de motor
			$table->string('lfgases');//Lavado: Filtro de Gases
			$table->string('flfiltro');
			$table->string('cambfiltro');
			$table->string('rsalidaa');//Revisión: Salideros de Aceite
			$table->string('fugaceite');//fuga aceite
			$table->string('rjuegovolante');//Revisión: Juego del Volante
			$table->string('abarrasy');//Ajustamiento de las Barras Yoquis de Dirección
			$table->string('raengrase');//Revisión, Ajuste y Engrase
			$table->string('rnadireccion');//Revisión: Nivel de Aceite de Direccion
			$table->string('ceembrague');//Chequeo y Engrase
			$table->string('grasa');//grasa
			$table->string('lavador');//Lavado del Radiador
			$table->string('cabmangueras');//Chequeo: Abrazaderas y Mangueras
			$table->integer('abra');
			$table->integer('mague');
			$table->string('rcluces');//Revisión y Chequeo: Luces
			$table->string('camlucesi');//Cambio De Luces Internas
			$table->integer('clucesi');//¿Cuantas Luces Internas Se Cambiaron?
			$table->string('camlucese');//Cambio de Luces Externas
			$table->integer('clucese');//¿Cuantas Luces Externas Se Cambiaron?
			$table->string('camlucesc');//Cambio de Luces Cruce
			$table->integer('clucesc');//¿Cuantas Luces de Cruce Se Cambiaron?
			$table->string('camlucesem');//Cambio de Luces Emergencia
			$table->integer('clucesem');//¿Cuantas Luces de Emergencia Se Cambiaron?
			$table->string('raamortiguador');//Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte
			$table->string('racamort');//aceite de los Amortiguadores
			$table->string('rmuelle');//Revisión: de Muelles
			$table->string('lubricar');//Lubricar
			$table->string('racamaras');//Revisión(Descarte de Fuga): Aire en las Cámaras
			$table->string('acamaras');
			$table->string('lbasesusp');//Limpieza: Base Suspensión del Aire
			$table->string('rarboljunta');//Revisión: Arbol y Junta de Transmisión
			$table->string('arbolajuste');
			$table->string('engrasar');//Engrasar	    
			$table->string('rsaliderod');//Revisión: Salidero del Diferencial
			$table->string('diferencia');
			$table->string('raceitedif');//Revisión: Nivel del Aceite Diferencial
			$table->string('laceitedif');//aceite del diferencial
			$table->string('rbaterias');//Rotación de Baterias
			$table->string('cbaterias');//Cambio de Baterias
			$table->string('caguabat');//Chequeo: Nivel de Agua de Baterias
			$table->string('batagua');//agua de baterias
			$table->string('mvoltaje');//Medición de Voltaje
			$table->string('cbornes');//Cambio de Bornes
			$table->string('ctbornes');//Ajuste y Limpieza: Bornes de Baterias
			$table->string('albornes');
			$table->string('cdestino');//Chequeo: Funcionamiento del Indicador de Destino
			$table->string('cornetas');//Chequeo: Cornetas
			$table->string('bandas');//Chequeo y ajustes de bandas de frenos
			$table->string('discos');//Chequeo y Ajustes: Discos de Frenos
			$table->string('cambioaa');//Cambio: Filtro A/A
			$table->string('lavadoaa');//Lavado: Filtro A/A
			$table->string('observaciones');
			$table->string('mecanico');
			$table->string('tecmecanico');
			$table->string('ayudmecanico');
			$table->string('recibido');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_preventivos');
	}

}
