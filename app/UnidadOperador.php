<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadOperador extends Model {

	protected $table = 'unidad_operadores';
	protected $fillable = ['usuario_id','unidad_id','servicio_id'];

}
