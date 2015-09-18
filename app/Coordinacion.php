<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model {

	protected $table = 'coordinaciones';
	protected $fillable = ['codigo','nombre'];
	public $timestamps = false;



}
