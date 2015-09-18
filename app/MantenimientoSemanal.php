<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoSemanal extends Model {

	protected $table = 'mantenimiento_semanales';

    public $timestamps = false;

    protected $fillable=['usuario_id',
    						'unidad_id',
    						'fecha',
                            'horamotor',
    						'cnliquido', //Llenado del liquido del limpia parabrisa
    							'litrosl', //Cantidad en litros de liquido completados
    						'presionc', //Correccion de la presion de los cauchos
    							'cantidadpre', //cantidad de aire completado
    						'filtrosa', //Limpieza de la estera de los filtros de aire acondicionado
    						'filtropre', //Limpieza del filtro previo de combustible
                            'sustituido', //Guarda la informacion si ha sido o no sustituido el filtro previo de combustible
    						'cantrefrigerante', //Chequeo del nivel de refrigerante
    							'litrosref', //Litros de refrigerante completado
    						'cantaceitem', //chequeo del nivel de aceite de motor
    							'litrosam', //Litros de aceite de motro completados
    						'cantaceiteh', //chequeo del nivel de aceite del sistema hidraulico
    							'litroshidra', //Cantidad de litos completados de aceite al sistema hidraulico
    						'fuelle',//revision del estado de los fuelles neumaticos
                                'reparado' //especifica si fue o no reparado el fuelle de estar en mal estado


						];

    public function unidad()
    {
       return $this->belongsTo('App\Unidad');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

}
