<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoDiario extends Model {

	protected $table = 'mantenimiento_diarios';

    public $timestamps = false;

    protected $fillable=['usuario_id',
                        'fecha',
    					'serviciounidadoperador_id',
    					'cnaceitem', //Chequeo Nivel de Aceite del Motor
                            'litrosa', //Litros Completados
                        'cnrefrigerante',//Chequeo Nivel de Refrigerante
    					   'litrosr', //Litros Completados
                        'frefrigerante',//Existe Fuga de refrigerante
                            'reparado',//reparacion de fuga al momento
                        'airene',//Chequeo de la Presión de Aire de los Neumáticos
    					   'aire', //Aire Completado
                        'cncomb',//Chequeo del Nivel de Combustible
                           'combust',//Tipo de Combustible
                           'diesel',//litros Completados
    					   'gas',//MPa Completados
                        'ceiasientos',//Chequeo del Estado Interior de la Unidad: Asientos
    					   'asientosmal',//asientos en mal estado
                        'ceecarroceria',//Chequeo del Estado Exterior de la Unidad: Carroceria y Vidrios
                            'rayones',//total rayones
        					'vidrios', //total vidrios
                        'ccorrea',//Chequeo del Estado de las Correas(tensión, estado fisico)
                            'acorrea',//ajuste correas
                            'camcorrea',//cambio correas
                        'ceseguridad',//Chequeo del Equipo de Seguridad (triángulo, extintor, conos)
                            'triangulo', //falta triangulo
                            'extintor', //falta extintor
        					'conos',//falta cono
    					'ceflucesi',//Chequeo del Estado Fisico de las Luces Internas
                            'lucesimal',//total Luces Internas mal estado
    					'celucesi',//Chequeo del Encendido de las Luces Internas
                            'elucesimal',//total luces internas q no encienden
                        'celucese',//Chequeo del Estado Fisico de las Luces Externas<
                            'ddere',//Delantero Derecho
                            'dizqe',//Delantero Izquierdo
                            'tdere',//Trasero Derecho
                            'tizqe',//Trasero Izquierdo
                        'celucesc',//Chequeo del Encendido de las Luces de Cruce
                            'dderc',//Delantero Derecho
                            'dizqc',//Delantero Izquierdo
                            'tderc',//Trasero Derecho
                            'tizqc',//Trasero Izquierdo
    					'celucesem',//Chequeo del Encendido de las Luces de Emergencia
                            'dderem',//Delantero Derecho
                            'dizqem',//Delantero Izquierdo
                            'tderem',//Trasero Derecho
                            'tizqem',//Trasero Izquierdo
                        ];

    public function serviciounidadoperador()
    {
       return $this->belongsTo('App\ServicioUnidadOperador');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

}
