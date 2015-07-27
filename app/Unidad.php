<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {

	
	 protected $table = 'unidades';
	 protected $fillable = ['serialcarroceria',
	 						'nidentificacion',
	 						'vin',
	 						'serialmotor',
	 						/*'kilometraje',
	 						'cantpersona',
	 						'pesomax',
	 						'potenciamotor',
	 						'fabricante',
	 						'ffabricaicon',
	 						'longitud',
	 						'combustible'*/
	 						];
/*
	 public function puestounidad()
	 {
	 	return $this->belongsMany('App\PuestoUnidad','id');
	 }

	 public function unidadoperador()
	 {
	 	return $this->belongsMany('App\UnidadOperador','id');
	 }

*/
	 public function unidadservicio()
	 {
	 	return $this->belongsTo('App\UnidadServicio','id');
	 }

}
