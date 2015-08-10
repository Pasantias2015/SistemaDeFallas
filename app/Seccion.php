<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model {

	protected $table = 'secciones';
	protected $fillable = ['codigo','descripcion','modelo_id'];
	public $timestamps = false;


	public function modelo()
	{
	 	return $this->belongsTo('App\Modelo');
	}
}
