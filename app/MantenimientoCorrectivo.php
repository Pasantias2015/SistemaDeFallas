<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoCorrectivo extends Model {

	protected $table = 'mantenimiento_correctivos';
	protected $fillable = [		'lugar',
								'fecha',
								'hora',
								'user_id',
								'seccion_id',
								'serviciounidadoperador_id',
								'sitioocurrencia', //grupo donde ocurre falla
								'frecuencia',
								'ruta',
								'haparicion', //hora aparcicioon
								'hservicio', //hora servicio
								'condiciones', //condiciones de la unidad
								'observaciones',
								'descripcion'];
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
