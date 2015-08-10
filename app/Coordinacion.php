<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model {

	protected $table = 'Coordinaciones';
	protected $fillable = ['codigo','nombre'];
	public $timestamps = false;



}
