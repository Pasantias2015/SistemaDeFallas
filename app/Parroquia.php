<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model {

	protected $table = 'parroquias';
	public $timestamps =false;

	public function persona()
	{
		return $this->hasMany('App\Persona','id');
	}
}
