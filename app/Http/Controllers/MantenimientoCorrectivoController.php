<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearMantenimientoCorrectivoRequest;
use App\Herramienta;
use App\OrdenReparacion;
use App\MantenimientoCorrectivo;
use App\User;
use App\Unidad;
use App\ServicioUnidadOperador;
use App\Operador;
use App\Seccion;


use Illuminate\Http\Request;

class MantenimientoCorrectivoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios= User::all();
		$unidades= Unidad::all();
		$operadores= Operador::all();
		$secciones= Seccion::all();
		$servicios = ServicioUnidadOperador::all();
		$mantenimientocorrectivos = MantenimientoCorrectivo::paginate(5);
        return view('MantenimientoCorrectivo.crear',compact('unidades','usuarios','operadores','secciones','mantenimientocorrectivos','servicios'));
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
	public function store(CrearMantenimientoCorrectivoRequest $request)
	{
		$mantenimientocorrectivos = MantenimientoCorrectivo::create($request->all());
		$operadores= Operador::all();
		$usuarios= User::all();
		$secciones= Seccion::all();
		$mantenimientoCorrectivos = MantenimientoCorrectivo::paginate(5);
        return view('MantenimientoCorrectivo.crear',compact('mantenimientocorrectivos','operadores','usuarios','secciones'));
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
	public function update(EditarMantenimientoCorrectivoRequest $request,$id)
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
