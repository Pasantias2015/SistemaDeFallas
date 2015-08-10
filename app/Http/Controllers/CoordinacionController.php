<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearCoordinacionRequest;
use App\Http\Requests\EditarCoordinacionRequest;
use App\Coordinacion;
use Illuminate\Http\Request;

class CoordinacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$coordinaciones = Coordinacion::paginate(5);
        return view('Coordinacion.crear',compact('coordinaciones'));
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
	public function store(CrearCoordinacionRequest $request)
	{
		$coordinacion = Coordinacion::create($request->all());
		$coordinaciones = Coordinacion::paginate(5);
        return view('Coordinacion.crear',compact('coordinaciones'));
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
		$coordinacion = Coordinacion::findOrFail($id);
        return view('Coordinacion.editar',compact('coordinacion'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarCoordinacionRequest $request,$id)
	{
		$coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->fill($request->all());
        $coordinacion->save();
        return redirect('coordinaciones');
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
