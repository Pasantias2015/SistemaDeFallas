<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearSeccionRequest;
use App\Http\Requests\EditarSeccionRequest;
use App\Modelo;
use App\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modelos= Modelo::all();
		$secciones = Seccion::paginate(5);
        return view('Seccion.crear',compact('secciones','modelos'));
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
	public function store(CrearSeccionRequest $request)
	{
		$seccion = Seccion::create($request->all());
		$modelos= Modelo::all();
		$secciones = Seccion::paginate(5);
        return view('Seccion.crear',compact('secciones','modelos'));
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
		$seccion = Seccion::findOrFail($id);
        return view('Seccion.editar',compact('seccion'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarSeccionRequest $request,$id)
	{
		$seccion = Seccion::findOrFail($id);
        $seccion->fill($request->all());
        $seccion->save();
        return redirect('secciones');
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
