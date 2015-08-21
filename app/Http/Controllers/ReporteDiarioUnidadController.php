<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoDiario;
use App\ServicioUnidadOperador;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteDiarioUnidadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(FechaRequest $request)
	{
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$uni = Unidad::findOrFail($request->unidad_id);
		$unidad = $uni->id;
		$serv = ServicioUnidadOperador::where('unidad_id','=',$unidad)->get();
		$id = $serv[0]->id;
		$diarios = MantenimientoDiario::where('serviciounidadoperador_id','=',$id)->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		return view('Mantenimiento_Diario.reporteunidad',compact('diarios','inicio','fin','uni'));

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
		//
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

}
