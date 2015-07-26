<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {

	protected $table = 'servicios';

	protected $fillable =['descripcion'];

	public $timestamps = false;

	public function serviciolugar()
	{
		return $this->belongsMany('App\ServicioLugar');
	}

	public function unidadoperador()
	{
		return $this->belongsMany('App\UnidadOperador');
	}

	public function unidadservicio()
	{
		return $this->belongsMany('App\UnidadOperador');
	}

}
