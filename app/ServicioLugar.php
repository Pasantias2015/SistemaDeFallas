<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioLugar extends Model {

	// tabla pivote de servicios y lugares
	protected $table = 'servicio_lugares';

	public $timestamps = false;

	protected $fillable = ['servicio_id','lugar_id','estado'];

	public function servicio()
	{
        return $this->hasOne('App\Servicio', 'id');
	}
	

	public function lugar()
	{
        return $this->hasOne('App\Lugar', 'id');
	}  

}
