<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model {

	protected $table = 'lugares';
	public $timestamps = false;
	protected $fillable=['descripcion','estatus','servicio_id'];

	public function serviciolugar()
	{
		return $this->belongsMany('App\ServicioLugar');
	}


}
