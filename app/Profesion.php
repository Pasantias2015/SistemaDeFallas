<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model {

	protected $table = 'profesiones';
	public $timestamps =false;

	public function persona()
	{
		return $this->hasMany('App\Persona','id');
	}

}
