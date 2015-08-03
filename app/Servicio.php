<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {

    protected $table = 'servicios';

    protected $fillable =['descripcion','estado'];
=======
	protected $fillable =['descripcion','estado'];
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c

    public $timestamps = false;

<<<<<<< HEAD
    public function serviciolugar()
    {
        // un servicio pertenece a un servicio lugar
        return $this->belongsMany('App\ServicioLugar');
    }
}
=======
	public function serviciolugar()
	{
		// un servicio pertenece a un servicio lugar
		return $this->belongsMany('App\ServicioLugar');
	}
}
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c
