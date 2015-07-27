<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioOperador extends Model {

	protected $table ='servicio_operadores';
    protected $fillable = ['operador_id','servicio_id'];
	public $timestamp = false;
	
	public function servicio()
    {
        return $this->hasOne('App\Servicio','id');
    }
    public function operador()
    {
        return $this->hasOne('App\Operador','id');
    }
}
