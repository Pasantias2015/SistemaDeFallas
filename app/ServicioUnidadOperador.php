<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioUnidadOperador extends Model {

	protected $table = 'servicio_unidad_operadores';
	public $timestamp = false;

	public function incidencias()
	{
		return $this->hasMany('App\Incidencia');
	}

}
