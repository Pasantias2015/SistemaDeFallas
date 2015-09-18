<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta_Reparacion extends Model {

	protected $table = 'herramienta_reparaciones';
	protected $fillable = ['herramienta_id','orden_id','descripcion','cantidad'];
	public $timestamps = false;

	public function herramienta()
	{
		return $this->belongsTo('App\Herramienta');
	}
	public function orden()
	{
		return $this->belongsTo('App\OrdenReparacion');
	}

}
