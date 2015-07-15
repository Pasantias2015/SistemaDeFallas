<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model {


	protected $table = 'fallas';
	protected $fillable = ['descripcion','id_categoriatipo'];
	public $timestamps = false;


	 public function CategoriaTipo()
    {
        return $this->belongsTo('App\CategoriaTipo');  
    }
	

}
