<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIncidencia extends Model {

	protected $table = 'detalle_incidencias';
	protected $fillable =['incidencia_id','falla_id','diagnostico'];
	public $timestamp = false;

	public function incidencia()
	{
		return $this->belongTo('App\Incidencia');
	}

}
