<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearOrdenReparacionRequest;
use App\Herramienta;
use App\OrdenReparacion;
use App\User;
use App\Pieza;
use App\Seccion;
use App\Grupo;
use App\Modelo;

use Illuminate\Http\Request;

class OrdenReparacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios= User::all();
		$piezas= Pieza::all();
		$herramientas= Herramienta::all();
		$secciones= Seccion::all();
		$grupos= Grupo::all();
		$modelos= Modelo::all();
		$reparaciones = OrdenReparacion::paginate(5);
        return view('OrdenReparacion.crear',compact('usuarios','piezas','herramientas','secciones','grupos','modelos','reparaciones'));
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
	public function store(CrearOrdenReparacionRequest $request)
	{
		$reparaciones = OrdenReparacion::create($request->all());
		$piezas= Pieza::all();
		$herramientas= Herramienta::all();
		$secciones= Seccion::all();
		$reparaciones = OrdenReparacion::paginate(5);
        return view('OrdenReparacion.crear',compact('reparaciones','piezas','herramientas','secciones'));
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
	public function update(EditarOrdenReparacionRequest $request,$id)
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
