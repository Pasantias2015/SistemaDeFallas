<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadServicio extends Model {

	protected $table ='unidad_servicios';
    protected $fillable = ['unidad_id','servicio_id'];
	public $timestamp = false;
	
	public function servicio()
    {
        return $this->hasOne('App\Servicio','id');
    }
    public function unidad()
    {
        return $this->hasOne('App\Unidad','id');
    }




}
