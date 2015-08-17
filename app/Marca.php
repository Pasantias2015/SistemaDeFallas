<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model {

	protected $table = 'marcas';

    public $timestamps = false;

    protected $fillable=['nombre'];

    public function modelo()
    {
        return $this->hasMany('App\Modelo','id');
    }


}
