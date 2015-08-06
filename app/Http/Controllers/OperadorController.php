<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Persona;
use Illuminate\Http\Request;
use App\Operador;
use App\User;
use App\Rol;
use App\Profesion;
use App\Pais;
use App\Estado;
use App\Ciudad;
use App\Municipio;
use App\Parroquia;

class OperadorController extends Controller {

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
	public function index()
	{
		/*$result = Persona::first();
		dd($result->operador);
		/**/
		
		$operadores = \DB::select('select * from operadores,personas where (operadores.persona_id = personas.id)');
	
		
		return view('Operadores.operadores',compact ('operadores'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			$roles=Rol::all();
			$profesiones=Profesion::all();
			$paises=Pais::all();
			$estados=Estado::all();
			$ciudades=Ciudad::all();
			$parroquias=Parroquia::all();
		  return view('Operadores.registraroperador',compact('roles','profesiones','paises','ciudades','estados','parroquias'));
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$persona = Persona::create($request->all());
		$Operador=$
		$Operador = Operador::create($request->all());
		return ($Operador->persona->foto);
		$operador = Operador::create($request->all());
		
		
        //return view('home');
        return redirect()->route('home');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
