<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {

	protected $table = 'cargos';
	protected $fillable = ['codigo','nombre','coordinacion_id'];
	public $timestamps = false;


	public function coordinacion()
    {
        return $this->belongsTo('App\Coordinacion');
    }
	public function persona()
	{
		return $this->hasMany('App\Persona','id');
	}




}
