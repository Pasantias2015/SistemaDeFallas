<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	protected $table = 'personas';
	protected $fillable = ['cedula','rif','pasaporte','pnombre','snombre','papellido','sapellido','fnacimiento','sexo','estadocivil','correo-electronico','pais','estado','ciudad','direccion','telefono'];

	public function getnombrecompletoAttribute(){
		return $this->pnombre.' '.$this->snombre;

	}

	public function usuario()
	{
        return $this->hasOne('App\User', 'id');
	}

	public function operador()
	{
        return $this->hasOne('App\Operador', 'id');
	}
}  
