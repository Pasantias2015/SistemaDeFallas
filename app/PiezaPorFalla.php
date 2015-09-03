<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PiezaPorFalla extends Model {

	protected $table = 'pieza_por_fallas';
	protected $fillable = ['id_piezaneoplan','id_porfallas'];
	public $timestamps = false;

	public function pieza_neoplan()
    {
        return $this->belongsTo('App\Pieza_Neoplan'); 
    }

    public function mantenimientoporfalla()
    {
        return $this->belongsTo('App\MantenimientoPorFalla'); 
    }
}