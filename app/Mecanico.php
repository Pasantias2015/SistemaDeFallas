<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model {

	protected $table = 'mecanicos';
	public $timestamps=false;

	public function persona()
	{
		return $this->belongsTo('App\Persona');
	}

	public function solicitud()
	 {
	 	return $this->hasMany('App\Solicitud');
	 }
}
