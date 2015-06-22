<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model {

	protected $table = 'operadores';
	protected $fillable = ['cedula', 'pnombre','snombre', 'papellido', 'sapellido','fnacimiento', 'telefono', 'telefonolaboral', 'direccion'];

}
