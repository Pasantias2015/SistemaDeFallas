<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {
	protected $table = 'Municipios';
	protected $fillable =['descripcion','ciudad_id'];
	public $timestamps =false;

	public function estado()
	{
		return $this->belongsTo('App\Ciudad');
	}
	public function parroquia()
	{
		return $this->hasMany('App\Parroquia','id');
	}

}
