<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model {

	protected $table = 'operadores';
	public $timestamps=false;

	public function persona()
	{
		return $this->belongsTo('App\Persona');
	}

	public function servicio()
	 {
	 	return $this->belongsTo('App\ServicioUnidadOperador','id');
	 }
	

} 
 