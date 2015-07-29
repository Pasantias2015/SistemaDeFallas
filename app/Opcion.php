<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model {

	protected $table = 'opciones';
	protected $fillable = ['descripcion','modulo_id'];
	public $timestamp=false;

	public function modulo()
	{
		return $this->belongsTo('App\Modulo');
	}

	public function rolopcion()
	{
		return $this->hasMany('App\OpcionRol','id');
	}

}
