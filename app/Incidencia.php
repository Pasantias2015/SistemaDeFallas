<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model {

	protected $table = 'incidencias';
	public function unidadoperador()
	{
	 return $this->belongs	
	}

}
