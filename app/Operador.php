<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model {

	protected $table = 'operadores';
	public $timestamps=false;

	protected $fillable = ['persona_id','estado','fechaasignacion'];

	public function persona()
	{
		return $this->belongsTo('App\Persona');
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
 