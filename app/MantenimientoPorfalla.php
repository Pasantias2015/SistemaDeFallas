<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoPorfalla extends Model {

		protected $table = 'mantenimiento_porfallas';

    public $timestamps = false;

    protected $fillable=['usuario_id',
    						'falla_id',
                            'causa_id',
                            'solucion_id',
    						'unidad_id',
    						'horamotor',
    						'nivelcombus',
    						'fecha',
    						'lugar',
    						'hora',
    						'freocurrencia',
    						'descripgeneral',

    ];


     public function unidad()
    {
       return $this->belongsTo('App\Unidad');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
        public function falla()
    {
        return $this->belongsTo('App\Falla');
    }
            public function causa()
    {
        return $this->belongsTo('App\Causa');
    }
            public function solucion()
    {
        return $this->belongsTo('App\Solucion');
    }

}
