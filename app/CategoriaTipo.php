<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaTipo extends Model {
 

	protected $table = 'categoria_tipos';
	protected $fillable = ['categoria_id','tipo_id']; 

    public $timestamps = false;

    public function categoria()
    {
        return $this->hasMany('App\Tipo','categoria_id'); 
    }

    public function tipo()
    {
        return $this->hasMany('App\Tipo','tipo_id'); 
    }

    public function Falla()
    {
        return $this->hasMany('App\Falla','id_categoriatipo'); 
    } 



}
