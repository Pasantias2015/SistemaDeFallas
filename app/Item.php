<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $table = 'items';
	protected $fillable = ['nombre','mantenimiento_id','estatus'];
	public $timestamps = false;


	public function mantenimiento()
	{
        return $this->belongsTo('App\Mantenimiento', 'id');
	}

}