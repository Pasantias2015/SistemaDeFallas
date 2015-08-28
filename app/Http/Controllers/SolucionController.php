<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearSolucionRequest;
use App\Http\Requests\EditarSolucionRequest;
use App\Solucion;
use App\Causa;
use Illuminate\Http\Request;

class SolucionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$causas= Causa::all();
		$soluciones = Solucion::paginate(5);
        return view('Solucion.crear',compact('soluciones','causas'));
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
	public function store(CrearSolucionRequest $request)
	{
		$solucion = Solucion::create($request->all());
		$causas = Causa::all();
		$soluciones = Solucion::paginate(5);
        return view('Solucion.crear',compact('soluciones','causas'));
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
		$solucion = Solucion::findOrFail($id);
        return view('Solucion.editar',compact('solucion'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarSolucionRequest $request,$id)
	{
		$solucion = Solucion::findOrFail($id);
        $solucion->fill($request->all());
        $solucion->save();
        return redirect('soluciones');
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
