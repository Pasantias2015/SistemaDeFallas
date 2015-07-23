<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {

	protected $table = 'paises';
	protected $fillable=['descripcion'];
	public $timestamps = false;
}

public function estado()
	{
        return $this->hasMany('App\Estado', 'id');
	}