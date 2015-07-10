<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	protected $table = 'personas';

	public function usuario()
	{
        return $this->hasOne('User', 'id');
	}
}
