<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoCorrectivo extends Model {

	protected $table = 'mantenimiento_correctivos';
	protected $fillable = [ 'supervisor',
							'serviciounidadoperador_id',
							'kilometraje',
							'gas',
							'lugar',
							'hora',
							'fecha',
							'seccion_id',
							'ocurrencia',
							'frecuencia',
							'condiciones',
							'aparicion',
							'hservicio',
							'otrasobs',
							'detalle',
							'revisado',
							'pendiente'	];



	public $timestamps = false;


	public function usuario()
	{
	 	return $this->belongsTo('App\User');
	}

	public function serviciounidadoperador()
	{
	 	return $this->belongsTo('App\ServicioUnidadOperador');
	}

	public function seccion()
	{
	 	return $this->belongsTo('App\Seccion');
	}
	 public function ordenreparacion()
    {
        return $this->hasOne('App\OrdenReparacion');
    }


}
