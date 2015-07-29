<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcionRol extends Model {

	protected $table= 'opcion_roles';
	public $timestamp = false;

	protected $fillable = ['opcion_id','rol_id'];

	   

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }

    public function opcion()
    {
        return $this->belongsTo('App\Opcion');
    }

}
