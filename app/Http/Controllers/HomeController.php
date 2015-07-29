<?php namespace App\Http\Controllers;
use App\Usuario_Opcion;
use App\User;
use App\Persona;

use App\Opcion;
use App\Database;
use App\Auth;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	public function __construct()
	{
		$this->middleware('auth');


	}

	
	/*
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*$results = \DB::select('select o.descripcion from opciones as o, usuario_opcions as uo where (o.id = uo.opcion_id) and(uo.user_id = :userid)', ['userid' => \Auth::user()->id]);
	
		
		return view('home',compact('results'));*/
		
		//$op = Modulo::all()->opcion;
		//dd(User::first()->persona->nombrecompleto);
		//return view('home');
		return view('Reportes.cedula');
	

		
	

	
	
	    /*
			buscar en la tabla usuario/opciones todas las opciones (id del usuario que ingresa)
			manda a la vista home una variable con todas las opciones 
			unidades 


		*/
	


}
}
