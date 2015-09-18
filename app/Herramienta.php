<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model {

	protected $table = 'herramientas';
	protected $fillable = ['codigo','descripcion'];
	public $timestamps = false;

	public function equiporeparacion()
	{
	 	return $this->belongsTo('App\Equipo_Reparacion');
	}


}
