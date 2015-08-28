<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model {

	protected $table = 'soluciones';
	protected $fillable = ['descripcion','causa_id'];
	public $timestamps = false;


	public function causa()
	{
	 	return $this->belongsTo('App\Causa');
	}

}
