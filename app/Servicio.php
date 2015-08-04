<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {

	protected $table = 'servicios';

	protected $fillable =['descripcion','estado'];

	public $timestamps = false;

	public function serviciolugar()
	{
		// un servicio pertenece a un servicio lugar
		return $this->belongsMany('App\ServicioLugar');
	}
}
