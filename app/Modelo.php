<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model {

	protected $table = 'modelos';

    public $timestamps = false;

    protected $fillable=['descripcion'];

    public function unidad()
    {
        // un modelo pertenece a muchas unidades
        return $this->belongsMany('App\Unidad');
    }

}
