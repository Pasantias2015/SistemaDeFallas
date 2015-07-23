<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model {

	protected $table = 'ciudades';
	public $timestamps = false;
	protected $fillable=['descripcion'];

	public function estado()
	{
		return $this->belongsTo('App\Estado');
	}
}
