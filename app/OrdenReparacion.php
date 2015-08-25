<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenReparacion extends Model {

	protected $table = 'orden_reparaciones';
	protected $fillable = ['fecha',
						'horainicio',
						'combustible',
						'refrigerante',
						'aceitem',
						'aceitec',
						'horafin',
						'tiempototal',
						'diagnostico',
						'descripcionuno',
						'descripciondos',
						'mantenimientocorrectivo_id'];
	public $timestamps = false;

	public function mantenimientocorrectivo()
    {
        return $this->belongsTo('MantenimientoCorrectivo');
    }





}