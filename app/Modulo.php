<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model {

	protected $table = 'modulos';
	
	public $timestamps = false;

	public function opciones()
	{
        return $this->hasMany('App\Opcion', 'id');
	}

	public function rol()
	{
        return $this->belongsTo('App\Rol');
	}


}
