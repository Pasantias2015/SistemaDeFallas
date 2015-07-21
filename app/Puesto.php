<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model {


	protected $table = 'puestos';


	 public function puestounidad()
	 {
	 	return $this->belongsMany('App\PuestoUnidad');
	 }

	 public function patio()
	 {
	 	return $this->belongsTo('App\Patio');
	 }

}
