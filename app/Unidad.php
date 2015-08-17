<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {

	
	 protected $table = 'unidades';
	 protected $fillable = ['serialcarroceria',
	 						'nidentificacion',
	 						'vin',
	 						'serialmotor',
	 						'modelo_id',
	 						'codigosistema',
	 						'uso',
	 						'year',
	 						//'kilometraje'//para monitero 
	 						/*'cantpersona',,
	 						'pesomax',
	 						'potenciamotor',
	 						'fabricante',
	 						'ffabricaicon',
	 						'longitud',
	 						'combustible'*/
	 						];
	 public $timestamps = false; 

	 public function modelo()
	 {
	 	return $this->belongsTo('App\Modelo');
	 }
	 public function puesto()
	 {
	 	return $this->belongsMany('App\PuestoUnidad','id');
	 }

	 public function servicio()
	 {
	 	return $this->belongsTo('App\ServicioUnidadOperador');
	 }
	 
	 public function preventivo()
    {
        return $this->hasMany('App\MantenimientoPreventivo');
    }

}
