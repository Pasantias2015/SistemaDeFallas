<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMantenimiento extends Model {

	protected $table = 'tipo_mantenimientos';

    public $timestamps = false;

    protected $fillable=['nombre','descripcion'];

    public function mantenimiento()
    {
        // un tipo pertenece a un mantenimiento
       // return $this->belongsMany('App\Mantenimiento');
    }

}
