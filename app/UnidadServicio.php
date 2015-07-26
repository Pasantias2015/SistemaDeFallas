<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadServicio extends Model {

	protected $table ='unidad_servicio';
	public $timestamp = false;
	
	public function servicio()
    {
        return $this->hasOne('App\Servicio');
    }
    public function unidad()
    {
        return $this->hasOne('App\Unidad');
    }




}
