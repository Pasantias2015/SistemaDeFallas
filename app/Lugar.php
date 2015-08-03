<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model {
    
    //Lugares se refiere a paradas
    protected $table = 'lugares';

    public $timestamps = false;

    protected $fillable=['descripcion','estado'];

    public function serviciolugar()
    {
        // un lugar pertenece a un servicio lugar
        return $this->belongsMany('App\ServicioLugar');
    }
}