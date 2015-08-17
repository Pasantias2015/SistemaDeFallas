<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MantenimientoDiario extends Model {

	protected $table = 'mantenimiento_diarios';

    public $timestamps = false;

    protected $fillable=['usuario_id',
                        'fecha',
    					'serviciounidadoperador_id',
    					'cnaceitem',
    					'cnarefrigerante',
    					'airene',
    					'cncomb',
    					'ceiasientos',
    					'ceicarroceria',
    					'ceeunidad',
    					'cfrenos',
    					'ccorrea',
    					'cradiador',
    					'ceseguridad',
    					'cbornes',
    					'cefluces',
    					'celuces',
    					'celucesem'];

    public function serviciounidadoperador()
    {
       return $this->belongsTo('App\ServicioUnidadOperador');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

}
