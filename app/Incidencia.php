<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model {

	protected $table = 'incidencias';
	protected $fillable =['unidadoperador_id','hora','fecha','user_id'];
	
	public function operadorunidad()
	{
		return $this->belongTo('App\ServicioUnidadOperador');
	}
	public function detalles()
	{
		return $this->hasMany('App\DetalleIncidencia');
	}

}
