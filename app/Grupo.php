<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model {

	protected $table = 'grupos';
	protected $fillable = ['codigo','descripcion','seccion_id'];
	public $timestamps = false;


	public function seccion()
	{
	 	return $this->belongsTo('App\Seccion');
	}

}
