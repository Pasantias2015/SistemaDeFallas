<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model {
<<<<<<< HEAD
    
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
=======
	
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
  
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c
