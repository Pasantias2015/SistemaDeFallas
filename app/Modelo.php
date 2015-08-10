<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model {

	protected $table = 'modelos';

    public $timestamps = false;

    protected $fillable=['codigo','descripcion','combustible','dimension','transmision'];

    public function unidad()
    {
        // un modelo pertenece a muchas unidades
        return $this->hasMany('App\Unidad','id');
    }

}
