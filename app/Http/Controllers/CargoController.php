<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearCargoRequest;
use App\Http\Requests\EditarCargoRequest;
use App\Cargo;
use App\Coordinacion;
use Illuminate\Http\Request;

class CargoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

public function index() 
	{
		
		$cargos = Cargo::all();
		$coordinaciones = Coordinacion::paginate(5);
        return view('Cargo.crear',compact('cargos', 'coordinaciones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearCargoRequest $request)
	{
		$cargo = Cargo::create($request->all());
		$cargos = Cargo::paginate(5);
		$coordinaciones = Coordinacion::paginate(5);
        return view('Cargo.crear',compact('cargos', 'coordinaciones'));
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
		$cargo = Cargo::findOrFail($id);
        return view('Cargo.editar',compact('cargo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarCargoRequest $request,$id)
	{
		$cargo = Cargo::findOrFail($id);
        $cargo->fill($request->all());
        $cargo->save();
        return redirect('cargos');
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
