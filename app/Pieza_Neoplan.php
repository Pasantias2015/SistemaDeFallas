<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza_Neoplan extends Model {
	
	protected $table = 'pieza_neoplans';
	protected $fillable = ['codigo','descripcion'];
	public $timestamps = false;
}