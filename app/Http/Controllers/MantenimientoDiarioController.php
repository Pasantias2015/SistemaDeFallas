<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\MantenimientoDiario;
use App\Http\Requests\CrearMantenimientoDiarioRequest;
use Illuminate\Http\Request;
use App\User;

class MantenimientoDiarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios =  User::all();
		$unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Diario.crear',compact('unidades','usuarios'));
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
	public function store(CrearMantenimientoDiarioRequest $request)
	{
		$diario = MantenimientoDiario::create($request->all());
        $unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Diario.crear',compact('unidades'));
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
		$diario = MantenimientoDiario::findOrFail($id);
        return view('Mantenimiento_Diario.ver',compact('diario'));
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
		$diarios = MantenimientoDiario::paginate(10);
		return view('Mantenimiento_Diario.listado',compact('diarios'));
	}

}
