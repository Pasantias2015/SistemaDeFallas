<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model {

	protected $table = 'incidencias';
	protected $fillable =['unidadoperador_id','falla_id','descripcion'];
	
	public function unidadoperador()
	{
	 return $this->belongs	
	}

}
