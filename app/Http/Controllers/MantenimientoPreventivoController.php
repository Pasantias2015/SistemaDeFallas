<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoPreventivo;
use App\Http\Requests\CrearMantenimientoPreventivoRequest;
use App\ServicioUnidadOperador;
use App\User;

use Illuminate\Http\Request;

class MantenimientoPreventivoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios =  User::all();
		$unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Preventivo.crear',compact('unidades','usuarios'));
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
	public function store(CrearMantenimientoPreventivoRequest $request)
	{
		MantenimientoPreventivo::create($request->all());
		$unidades =  Unidad::all();
		$usuarios =  User::all();
		return view('Mantenimiento_Preventivo.crear',compact('unidades','usuarios'));
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
		$preventivo = MantenimientoPreventivo::findOrFail($id);
        return view('Mantenimiento_Preventivo.ver',compact('preventivo'));
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
	public function listado()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Mantenimiento_Preventivo.listado',compact('preventivos'));
	}

}
