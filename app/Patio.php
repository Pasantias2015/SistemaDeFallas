<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patio extends Model {

	
	protected $table = 'patios';
	protected $fillable = ['descripcion'];
	public $timestamps =false;

	public function puesto()
	{
		return $this->hasMany('App\Puesto','id');
	}
}
