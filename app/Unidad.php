<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {

	//
	 protected $table = 'unidades';
	 protected $fillable = ['id','serial'/*,'nidentificacion'*/,'vin','serialmotor','kilometraje','cantpersona','pesomax','potenciamotor','fabricante','ffabricaicon','longitud','combustible'];


}
