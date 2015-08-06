<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model {

	protected $table = 'mantenimientos';

    public $timestamps = false;

    protected $fillable=['nombre','descripcion'];

}
