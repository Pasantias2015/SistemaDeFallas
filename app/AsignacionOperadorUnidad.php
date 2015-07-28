<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionOperadorUnidad extends Model {

	protected $table= 'asignacion_operador_unidades';
	public $timestamp = false;

	protected $fillable = ['operador_id','unidad_id']; 


}
