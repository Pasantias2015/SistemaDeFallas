<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

	protected $table = 'roles';
	
	public $timestamps = false;

	public function user()
    {
        return $this->hasMany('App\User');
    }

    public function rolopcion()
    {
        return $this->hasMany('App\OpcionRol');
    }
}
