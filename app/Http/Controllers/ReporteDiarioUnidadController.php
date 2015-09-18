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
	public function __construct()
	{
		$this->middleware('auth');
	}
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
		$id = $uni->id;

		$diarios = MantenimientoDiario::where('unidad_id','=',$id)->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		
		//Reporte de Uso de Fluidos Mto Diario por Unidad
		$a1 = MantenimientoDiario::where('unidad_id','=',$id)->where('litrosa','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litrosa');
		$b1 = MantenimientoDiario::where('unidad_id','=',$id)->where('litrosr','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litrosr');
		$c1 = MantenimientoDiario::where('unidad_id','=',$id)->where('aire','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('aire');
		$d1 = MantenimientoDiario::where('unidad_id','=',$id)->where('diesel','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('diesel');
		$e1 = MantenimientoDiario::where('unidad_id','=',$id)->where('gas','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('gas');
		
		return view('Mantenimiento_Diario.reporteunidad',compact('diarios','inicio','fin','uni','a1', 'b1','c1','d1','e1'));
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
