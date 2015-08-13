<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioUnidadOperador extends Model {

	protected $table = 'servicio_unidad_operadores';
	protected $fillable = ['servicio_id','unidad_id','operadores_id'];
	public $timestamp = false;

	
	public function servicio()
	{
		return $this->belongsTo('App\Servicio');
	}
	public function unidad()
	{
		return $this->belongsTo('App\Unidad');
	}
	public function operador()
	{
		return $this->belongsTo('App\Operador');
	}
	public function incidencias()
	{
		return $this->hasMany('App\Incidencia');
	}
	public function diario(){
		return $this->hasMany('App\MantenimientoDiario');
	}
	public function preventivo(){
		return $this->hasMany('App\MantenimientoPreventivo');
	}

}
