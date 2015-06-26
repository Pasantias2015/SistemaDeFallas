<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FallaController extends Controller {

		/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function registrarfalla(){
		return view('Fallas.registrarfalla');
	}
	public function registrarfallaunidadoperador(){
		return view('Fallas.registrarfallaunidadoperador');
	}
	public function registrarcategoriafalla(){
		return view('Fallas.registrarcategoriafalla');
	}
	public function registrartipofalla(){
		return view('Fallas.registrartipofalla');
	}





	
}
