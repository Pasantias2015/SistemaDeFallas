<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarUnidadRequest;
use App\Unidad;
use App\Modelo;

use Illuminate\Http\Request;

class AsignarController extends Controller {

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
		$modelos = Modelo::all();
		$unidades = Unidad::paginate(5);
		return view('Unidades.asignarcodigo',compact('unidades','modelos'));
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
	public function store()
	{
		//
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
		$unidad = Unidad::findOrFail($id);
        return view('Unidades.asignarcodigo2',compact('unidad'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ActualizarUnidadRequest $request,$id)
	{
		$unidad = Unidad::findOrFail($id);
        $unidad->fill($request->all());
        $unidad->save();
        return redirect('asignar');
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
