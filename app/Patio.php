<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patio extends Model {

	
	protected $table = 'patios';
	protected $fillable = ['descripcion'];

	public function puesto()
	{
		return $this->hasMany('App\Puesto','id');
	}
}
