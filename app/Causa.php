<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Causa extends Model {

	protected $table = 'causas';
	protected $fillable = ['causafalla','falla_id'];
	public $timestamps = false;


	public function falla()
	{
	 	return $this->belongsTo('App\Falla');
	}

}
