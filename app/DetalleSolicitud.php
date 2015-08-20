<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSolicitud extends Model {

	protected $table = 'detalle_solicitudes';
	protected $fillable =['almacen_id','solicitud_id'];
	public $timestamp = false;

	public function almacen()
	{
		return $this->belongTo('App\Almacen');
	}
	public function solicitud()
	{
		return $this->belongTo('App\Solicitud');
	}

}
