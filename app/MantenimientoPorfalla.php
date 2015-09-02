<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoPorfalla extends Model {

		protected $table = 'mantenimiento_porfallas';

    public $timestamps = false;

    protected $fillable=['usuario_id',
    						"falla_id",
    						"serviciounidadoperador_id",
    						"Horamotor",
    						"nivelcombus",
    						"fecha",
    						"lugar",
    						"hora",
    						"freocurrencia",
    						"DescripcionGeneral",

    ];


     public function serviciounidadoperador()
    {
       return $this->belongsTo('App\ServicioUnidadOperador');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
        public function falla()
    {
        return $this->belongsTo('App\Falla');
    }

}
