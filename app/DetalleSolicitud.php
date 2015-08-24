<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSolicitud extends Model {

	protected $table = 'detalle_solicitudes';
	protected $fillable =['almacen_id','solicitud_id','cantidad'];
	public $timestamps = false;

	public function almacen()
	{
		return $this->belongsTo('App\Almacen');
	}
	public function solicitud()
	{
		return $this->belongsTo('App\Solicitud');
	}

}
