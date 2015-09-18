<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearUsuarioRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Hash;

class UsuarioController extends Controller {

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
		//
	}
public function create()
	{
			
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearUsuarioRequest $request)
	{
		$clave = Hash::make($request->password);
		
		$usuario = User::create($request->all());
		$id = $usuario->id; 
		return $id;
		$user = User::findOrFail($id);
		
		$user->password= $clave;
		$user->password_confirmation =$clave;
		$user->save();

		return view('home');
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
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
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
		//
	}
}
