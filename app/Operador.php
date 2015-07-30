<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model {

	protected $table = 'operadores';
	protected $fillable = ['telefonolaboral'];

	public function persona()
	{
		return $this->belongsTo('Persona');
	}

	public function servicio()
	 {
	 	return $this->belongsTo('App\ServicioUnidadOperador','id');
	 }
	public function scopename($query, $name)
	{
		dd("scope: ". $name);
		$query->where('pnombre', $name); //llamar el primer nombre
	}

} 
 