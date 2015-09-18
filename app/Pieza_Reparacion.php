<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza_Reparacion extends Model {

	protected $table = 'pieza_reparaciones';
	protected $fillable = ['pieza_id','orden_id','descripcion','cantidad'];
	public $timestamps = false;

	public function pieza()
	{
		return $this->belongsTo('App\Pieza');
	}
	public function orden()
	{
		return $this->belongsTo('App\OrdenReparacion');
	}
}
