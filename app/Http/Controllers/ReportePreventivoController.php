<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoPreventivo;
use App\ServicioUnidadOperador;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReportePreventivoController extends Controller {

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
		//Reporte de Uso de Fluidos Mto Preventivo
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$preventivos = MantenimientoPreventivo::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();

		$a1 = MantenimientoPreventivo::where('litrosr','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litrosr');
		$b1 = MantenimientoPreventivo::where('litrosa','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litrosa');
		$c1 = MantenimientoPreventivo::where('litroscom','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('litroscom');
		$d1 = MantenimientoPreventivo::where('grasa','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('grasa');
		$e1 = MantenimientoPreventivo::where('laceitedif','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('laceitedif');
		$f1 = MantenimientoPreventivo::where('batagua','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('batagua');
		
		$a2 = MantenimientoPreventivo::where('correascamb','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('correascamb');
		$b2 = MantenimientoPreventivo::where('ctapas','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('ctapas');
		$c2 = MantenimientoPreventivo::where('abra','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('abra');
		$d2 = MantenimientoPreventivo::where('mague','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('mague');
		$e2 = MantenimientoPreventivo::where('clucesi','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucesi');
		$f2 = MantenimientoPreventivo::where('clucese','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucese');
		$g2 = MantenimientoPreventivo::where('clucesc','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucesc');
		$h2 = MantenimientoPreventivo::where('clucesem','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucesem');
		$i2 = MantenimientoPreventivo::where('ctbornes','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('ctbornes');
	

		return view('Mantenimiento_Preventivo.reporteuso',compact('preventivos',
																	'a1', 'b1','c1','d1','e1','f1',
																	'a2', 'b2','c2','d2','e2','f2','g2','h2','i2',
																	'inicio','fin'));
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
