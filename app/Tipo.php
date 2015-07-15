<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model {


	protected $table = 'tipos'; 
	protected $fillable = ['descripcion'];

	public $timestamps = false; 

	public function Categoria()
    {
        return $this->belongsToMany('App\Categoria','categoria_tipos');  
    }
}
