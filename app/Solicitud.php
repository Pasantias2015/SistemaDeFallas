<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model {
	
	protected $table = 'solicitudes';
	protected $fillable = ['fecha','hora','usuario_id','persona_id','estado'];
	public $timestamps = false;


	public function usuario()
	{
	 	return $this->belongsTo('App\User','usuario_id');
	}
	public function persona()
	{
	 	return $this->belongsTo('App\Persona');
	}
	public function detalle()
	{
	 	return $this->hasMany('App\DetalleSolicitud');
	}
	public function entregado()
	{
        return $this->hasMany('App\Entregado','id');
	}

}