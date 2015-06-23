<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	 public function authenticate()
    {
        if (Auth::attempt(['usuario' => $usuario, 'contraseña' => $contraseña])) { return redirect()->intended('dashboard'); 
    } 
}


}
