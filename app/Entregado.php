<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entregado extends Model {

	protected $table = 'entregados'; //responsable de la entrega de las solicitudes
	protected $fillable = ['fecha','hora','usuario_id','solicitud_id'];
	public $timestamps = false;


	public function usuario()
	{
	 	return $this->belongsTo('App\User','usuario_id');
	}
	public function solicitud()
	{
	 	return $this->belongsTo('App\Solicitud');
	}

}
