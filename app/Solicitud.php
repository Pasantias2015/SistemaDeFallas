<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model {
	
	protected $table = 'solicitudes';
	protected $fillable = ['fecha','hora','usuario_id','persona_id',];
	public $timestamps = false;


	public function usuario()
	{
	 	return $this->belongsTo('App\Usuario');
	}
	public function mecanico()
	{
	 	return $this->belongsTo('App\Persona');
	}
}