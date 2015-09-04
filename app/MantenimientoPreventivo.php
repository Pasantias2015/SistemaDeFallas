<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoPreventivo extends Model {

	protected $table = 'mantenimiento_preventivos';

    public $timestamps = false;

    protected $fillable=[
    					'fecha',
    					'unidad_id',
					    'kilometraje',
					    'rlfiltroa', //revision y limpieza filtro de aire
					    'clubricante', //cambio lubricante motor
					    'litrosr',//litros completado
					    'cfaceite', //cambio filtro de aceite
					    'litrosa',
						'lfcombustible', //lavado del filtro de combustible
						'litroscom',
					    'rlineascom', //revision de las lineas combustible descarte de fuga
					    'fugarep',//fuga combustible
					    'rrefrigerante', //revision (descarte de fuga) de refrigerante
					    'fugaref',//fuga refrigerante
					    'rcorrea', //revision de correa
					    'ccorrea',//Cambio de Correa
					    'correascamb',
					    'tapasr',
					    'rtapasr', //revision de las tapas de radiador
					    'ctapas',//cambio de tapas
					    'lavadom', //lavado de motor
					    'lfgases',//Lavado: Filtro de Gases
					    'flfiltro',
						'cambfiltro',    
					    'rsalidaa', //Revisión: Salideros de Aceite
					    'fugaceite',//fuga aceite
						'rjuegovolante',//Revisión: Juego del Volante
						'abarrasy',//Ajustamiento de las Barras Yoquis de Dirección
						'raengrase',//Revisión, Ajuste y Engrase
					    'rnadireccion',//Revisión: Nivel de Aceite de Direccion
					    'ceembrague',//Chequeo y Engrase
					    'grasa',//grasa
					    'lavador',//Lavado del Radiador
					  	'cabmangueras',//Chequeo: Abrazaderas y Mangueras
					    'abra' ,
					   	'mague',
					   	'rcluces',//Revisión y Chequeo: Luces
					   	'camlucesi', //Cambio De Luces Internas
					   	'clucesi', //¿Cuantas Luces Internas Se Cambiaron?
					    'camlucese', //Cambio de Luces Externas
					    'clucese', //¿Cuantas Luces Externas Se Cambiaron?
					    'camlucesc',//Cambio de Luces Cruce
					    'clucesc',//¿Cuantas Luces de Cruce Se Cambiaron?
					    'camlucesem',//Cambio de Luces Emergencia
					    'clucesem',//¿Cuantas Luces de Emergencia Se Cambiaron?
					    'raamortiguador',//Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte
						'racamort',//aceite de los Amortiguadores
						'rmuelle',//Revisión: de Muelles
						'lubricar',//Lubricar
					    'racamaras',//Revisión(Descarte de Fuga): Aire en las Cámaras
					     'acamaras',
					    'lbasesusp',//Limpieza: Base Suspensión del Aire
						'rarboljunta',//Revisión: Arbol y Junta de Transmisión
						'arbolajuste',
						'engrasar',//Engrasar	    
						'rsaliderod',//Revisión: Salidero del Diferencial
  						'diferencia',
 						'raceitedif',//Revisión: Nivel del Aceite Diferencial
 						'laceitedif',//aceite del diferencial
					    'rbaterias',//Rotación de Baterias
					    'cbaterias',//Cambio de Baterias
						'caguabat',//Chequeo: Nivel de Agua de Baterias
					    'batagua',//agua de baterias	
						'mvoltaje',//Medición de Voltaje
					   	'cbornes', //Cambio de Bornes
					    'ctbornes',
					    'albornes',//Ajuste y Limpieza: Bornes de Baterias
						'cdestino',//Chequeo: Funcionamiento del Indicador de Destino
						'cornetas',//Chequeo: Cornetas
						'bandas',//Chequeo y ajustes de bandas de frenos
						'discos',//Chequeo y Ajustes: Discos de Frenos
					    'cambioaa',//Cambio: Filtro A/A
					    'lavadoaa', //Lavado: Filtro A/A
					    'observaciones',
 						'mecanico',
						'tecmecanico',
						'ayudmecanico',
						'recibido',
						'usuario_id'				
    ];

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
	public function unidad()
    {
       return $this->belongsTo('App\Unidad');
    }
}
