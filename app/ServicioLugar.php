<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioLugar extends Model {

<<<<<<< HEAD
    // tabla pivote de servicios y lugares
    protected $table = 'servicio_lugares';
=======
	// tabla pivote de servicios y lugares
	protected $table = 'servicio_lugares';

	public $timestamps = false;

	protected $fillable = ['servicio_id','lugar_id','estado'];

	public function servicio()
	{
        return $this->hasOne('App\Servicio', 'id');
	}
	

	public function lugar()
	{
        return $this->hasOne('App\Lugar', 'id');
	}  
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c

    public $timestamps = false;

    protected $fillable = ['servicio_id','lugar_id','estado'];

    public function servicio()
    {
       return $this->hasOne('App\Servicio', 'id');
    }
    

    public function lugar()
    {
       return $this->hasOne('App\Lugar', 'id');
    }  

}
