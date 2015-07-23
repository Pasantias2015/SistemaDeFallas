<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {

	protected $table = 'estados';
	public $timestamps = false;
	protected $fillable=['descripcion'];

	public function pais()
	{
		return $this->belongsTo('App\Pais');
	}

	public function estado()
	{
        return $this->hasMany('App\Ciudad', 'id');
	}

}
