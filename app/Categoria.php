<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
 

	protected $table = 'categorias';
    protected $fillable = ['descripcion']; 

    public $timestamps = false;

    public function Tipo()
    {
        return $this->belongsToMany('App\Tipo','categoria_tipos');  
    }

}
