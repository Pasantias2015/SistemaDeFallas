<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcionRol extends Model {

	protected $table= 'opcion_rol';
	public $timestamp = false;

	protected $fillable = ['opcion_id','rol_id'];

	public function opcion()
    {
        return $this->hasOne('App\Opcion','id');
    }
    public function rol()
    {
        return $this->hasOne('App\Rol','id');
    }

}
