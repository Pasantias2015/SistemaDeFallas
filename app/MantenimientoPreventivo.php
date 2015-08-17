<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoPreventivo extends Model {

	protected $table = 'mantenimiento_preventivos';

    public $timestamps = false;

    protected $fillable=[
					    'usuario_id',
					    'serviciounidadoperador_id',
					    'fecha',
					    'kilometraje',
					    'combustible',
					    'rlfiltroa', //revision y limpieza filtro de aire
					    'clubricante', //cambio lubricante motor
					    'cfaceite', //cambio filtro de aceite
					    'lfcombustible', //lavado del filtro de combustible
					    'rlineascom', //revision de las lineas combustible descarte de fuga
					    'rrefrigerante', //revision (descarte de fuga) de refrigerante
					    'rcorrea', //revision de correa
					    'rtapasr', //revision de las tapas de radiador
					    'lavadom', //lavado de motor
					    'rsalidaa', //Revisión: Salideros de Aceite
					    'rjuegovolante',//Revisión: Juego del Volante
					    'revision',//Revisión
					    'abarrasy',//Ajustamiento de las Barras Yoquis de Dirección
					    'raengrase',//Revisión, Ajuste y Engrase
					    'rnadireccion',//Revisión: Nivel de Aceite de Direccion
					    'lfgases',//Lavado: Filtro de Gases
					    'ceembrague',//Chequeo y Engrase
					    'lavador',//Lavado del Radiador
					    'cabmangueras',//Chequeo: Abrazaderas y Mangueras
					    'raamortiguador',//Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte
					    'rmuelle',//Revisión: de Muelles
					    'lubricar',//Lubricar
					    'racamaras',//Revisión(Descarte de Fuga): Aire en las Cámaras
					    'lbasesusp',//Limpieza: Base Suspensión del Aire
					    'rarboljunta',//Revisión: Arbol y Junta de Transmisión
					    'engrasar',//Engrasar
					    'rsaliderod',//Revisión: Salidero del Diferencial
					    'raceitedif',//Revisión: Nivel del Aceite Diferencial
					    'rbaterias',//Rotación de Baterias
					    'caguabat',//Chequeo: Nivel de Agua de Baterias
					    'mvoltaje',//Medición de Voltaje
					    'albornes',//Ajuste y Limpieza: Bornes de Baterias
					    'rcluces',//Revisión y Chequeo: Luces
					    'cdestino',//Chequeo: Funcionamiento del Indicador de Destino
					    'bandas',//Chequeo y ajustes de bandas de freno
					    'ccorrea',//Cambio de Correa
					    'cbaterias', //Cambio de Baterias
					    'cbornes', //Cambio de Bornes
					    'mecanico',
						'tecmecanico',
						'ayudmecanico',
						'recibido'
    ];

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
	public function serviciounidadoperador()
    {
       return $this->belongsTo('App\ServicioUnidadOperador','id');
    }
}
