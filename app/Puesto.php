<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model {


	protected $table = 'puestos';
	protected $fillable = ['descripcion','patio_id'];
	public $timestamps = false;


	 public function puestounidad()
	 {
	 	return $this->belongsMany('App\PuestoUnidad');
	 }

	 public function patio()
	 {
	 	return $this->belongsTo('App\Patio');
	 }

}
