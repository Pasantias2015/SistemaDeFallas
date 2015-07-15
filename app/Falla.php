<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model {


	protected $table = 'fallas';


	 public function CategoriaTipo()
    {
        return $this->belongsTo('App\CategoriaTipo');
    }
	

}
