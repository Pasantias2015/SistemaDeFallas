<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model {

	protected $table = 'modelos';

    public $timestamps = false;

    protected $fillable=['descripcion','combustible','dimension','year','transmision'];

    public function unidad()
    {
        // un modelo pertenece a muchas unidades
        return $this->belongsMany('App\Unidad');
    }

}
