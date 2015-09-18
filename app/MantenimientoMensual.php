<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoMensual extends Model {

	protected $table = 'mantenimiento_mensuales';

    public $timestamps = false;

    protected $fillable=['usuario_id',
    						'unidad_id',
    						'fecha',
    						'liquidobat', //nivel del liquido de la bateria
    							'litrosb', //Cantidad de Litros completados a la bateria
    						'escobillas', //revision de las escobillas de los limpia parabrisas
    						'filtros', // revision de estado de filtro de la instalacion de aire
    						'liquidoven', //nivel del liquido del accionamiento hidroestatico del ventilador
    							'litrosven', //cantidads de liquido completados al sistema del ventilador
    						'airepresion', //liberacion de presion de aire
    						'filtroscomb', //liberacion de agua del filtro de combustible
    						'forro', //estado de forro del freno
    						'correas', //Estado de las correas trapezoidale
    						'rejillas' //Limpieza de las rejillas de filtrantes de recirculacion del Climatizador.

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
