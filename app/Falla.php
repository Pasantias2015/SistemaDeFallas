<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model {

	protected $table = 'fallas';
	protected $fillable = ['descripcion','unidad_id'];
	public $timestamps = false;


	public function modelo()
	{
	 	return $this->belongsTo('App\Unidad');
	}
}
