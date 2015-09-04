<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioUnidadOperador extends Model {

	protected $table = 'servicio_unidad_operadores';
	protected $fillable = ['servicio_id','unidad_id','operador_id','fecha'];
	public $timestamps = false;

	
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
	
	public function preventivo(){
		return $this->hasMany('App\MantenimientoPreventivo');
	}
	public function correctivo(){
		return $this->hasMany('App\MantenimientoCorrectivo');
	}

}
