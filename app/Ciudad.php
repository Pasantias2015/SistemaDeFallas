<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model {

	protected $table = 'ciudades';
	public $timestamps = false;
	protected $fillable=['descripcion','estado_id'];

	public function estado()
	{
		return $this->belongsTo('App\Estado');
	}
	public function municipios()
	{
		return $this->hasMany('App\Municipio','id');
	}
}
