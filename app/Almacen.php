<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model {

	protected $table = 'almacenes'; //saber que hay en el inventario
	protected $fillable = ['codigo','descripcion','cantidad','tipo'];
	public $timestamps = false;

}