<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoDiario;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteDiarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$diarios = MantenimientoDiario::paginate(10);
		return view('Reportes.diariouso',compact('diarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FechaRequest $request)
	{
		//Reporte de Uso de Fluidos Mto Diario
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$diarios = MantenimientoDiario::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();

		$a1 = MantenimientoDiario::where('litrosa','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litrosa');
		$b1 = MantenimientoDiario::where('litrosr','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litrosr');
		$c1 = MantenimientoDiario::where('aire','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('aire');
		$d1 = MantenimientoDiario::where('diesel','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('diesel');
		$e1 = MantenimientoDiario::where('gas','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('gas');
		
		return view('Mantenimiento_Diario.reporteuso',compact('diarios','a1', 'b1','c1','d1','e1','inicio','fin'));
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
