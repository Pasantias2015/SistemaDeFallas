<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model {

	protected $table = 'operadores';
	protected $fillable = ['telefonolaboral', 'status'];

	public function persona()
	{
		return $this->belongsTo('Persona');
	}

	public function unidadoperador()
	 {
	 	return $this->belongsMany('App\UnidadOperador');
	 }
	

} 
 