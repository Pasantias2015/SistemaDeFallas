<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model {

	protected $table = 'parroquias';
	protected $fillable = ['municio_id','descripcion'];
	public $timestamps=false;

public function municipio()
	{
		return $this->belongsTo('App\Municipio');
	}

	public function persona()
	{
		return $this->hasMany('App\Persona','id');
	}
}