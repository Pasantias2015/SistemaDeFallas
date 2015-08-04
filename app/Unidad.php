<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {

	
	 protected $table = 'unidades';
	 protected $fillable = ['serialcarroceria',
	 						'nidentificacion',
	 						'vin',
	 						'serialmotor',
	 						'modelo_id'
	 						/*'kilometraje',
	 						'cantpersona',
	 						'pesomax',
	 						'potenciamotor',
	 						'fabricante',
	 						'ffabricaicon',
	 						'longitud',
	 						'combustible'*/
	 						];

	 public function modelo()
	 {
	 	return $this->belongsMany('App\Modelo','id');
	 }
	 public function puesto()
	 {
	 	return $this->belongsMany('App\PuestoUnidad','id');
	 }

	 public function servicio()
	 {
	 	return $this->belongsTo('App\ServicioUnidadOperador','id');
	 }

}
