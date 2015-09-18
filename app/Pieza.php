<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model {

	protected $table = 'piezas';
	protected $fillable = ['codigo','descripcion','cantidad','grupo_id'];
	public $timestamps = false;


	public function grupo()
	{
	 	return $this->belongsTo('App\Grupo');
	}
	public function piezareparacion()
	{
	 	return $this->belongsTo('App\Pieza_Reparacion');
	}

}
