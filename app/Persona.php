<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	protected $table = 'personas';
	protected $fillable = ['cedula','pnombre','snombre','papellido',
							'sapellido','direccion','fnacimiento','estadocivil',
							'telefono-hab','telefono-mov','correo-electronico',
							'rif','sexo','estatura','peso',
    						'camisa','pantalon','zapato',
    						'profesion_id','nivel','parroquia_id','hijos','foto'];
    public $timestamps=false;

    public function getProfileImage()
    {	
    	if(!empty($this->foto) && File::exists($this->foto))
    	{		
    		
    		$subdomain = subdomain();

    		// Get the filename from the full path
    		$filename = basename($this->foto);

    		return 'images/image.php?id='.$subdomain.'&imageid='.$filename;
    	}

        return 'images/missing.png';
    }

	public function getnombrecompletoAttribute(){
		return $this->pnombre.' '.$this->papellido;

	}
	public function profesion()
	{
		return $this->belongTo('App\Profesion');
	}
	public function parroquia()
	{
		return $this->belongTo('App\Parroquia');
	}

	public function usuario()
	{
        return $this->hasOne('App\User','id');
	}

	public function operador()
	{
        return $this->hasOne('App\Operador','id');
	}
	public function mecanico()
	{
        return $this->hasOne('App\Mecanico','id');
	}
	public function solicitud()
	{
        return $this->hasMany('App\Solicitud','id');
	}
}  
