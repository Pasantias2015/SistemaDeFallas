<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearPersonaRequest;

use Illuminate\Http\Request;
use App\Persona;
use App\Operador;
use App\Mecanico;
use App\User;
use App\Rol;
use App\Profesion;
use App\Pais;
use App\Estado;
use App\Ciudad;
use App\Municipio;
use App\Parroquia;

class PersonaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$per = Persona::findorfail(2)->foto;
       return view ('Personas.persona',compact('persona'));

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
            return view('Personas.crear',compact('roles','profesiones','paises'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearPersonaRequest $request)
	{
	
	
	$persona = Persona::create($request->all());
	//$file = $request->file('foto');
     
	if($persona->save()){
        	//guardamos la imagen en public/imgs con el nombre original
        	//$file->move("images",$persona->foto);
			//redirigimos con un mensaje flash
			return 'Te has registrado correctamente.';
        } 
		
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		

		//return view('Personas.persona',compact('persona'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}
	public function listado()
	{
		$personas=Persona::all();
        return view('Personas.listado',compact('personas'));
	}

}
