<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoPreventivo;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteSuspensionPreventivoController extends Controller {

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
		//Reporte de Uso de Suspension Mto Preventivo
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$preventivos = MantenimientoPreventivo::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		//Suspension
		$a1 = MantenimientoPreventivo::where('raamortiguador','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$a2 = MantenimientoPreventivo::where('raamortiguador','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b1 = MantenimientoPreventivo::where('racamort','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b2 = MantenimientoPreventivo::where('racamort','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c1 = MantenimientoPreventivo::where('rmuelle','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c2 = MantenimientoPreventivo::where('rmuelle','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d1 = MantenimientoPreventivo::where('lubricar','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d2 = MantenimientoPreventivo::where('lubricar','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e1 = MantenimientoPreventivo::where('racamaras','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e2 = MantenimientoPreventivo::where('racamaras','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f1 = MantenimientoPreventivo::where('acamaras','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f2 = MantenimientoPreventivo::where('acamaras','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g1 = MantenimientoPreventivo::where('lbasesusp','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g2 = MantenimientoPreventivo::where('lbasesusp','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		//arbol de Suspension
		$h1 = MantenimientoPreventivo::where('rarboljunta','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h2 = MantenimientoPreventivo::where('rarboljunta','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i1 = MantenimientoPreventivo::where('arbolajuste','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i2 = MantenimientoPreventivo::where('arbolajuste','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j1 = MantenimientoPreventivo::where('engrasar','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2 = MantenimientoPreventivo::where('engrasar','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		//Eje y Rueda
		$k1 = MantenimientoPreventivo::where('rsaliderod','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2 = MantenimientoPreventivo::where('rsaliderod','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l1 = MantenimientoPreventivo::where('diferencia','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l2 = MantenimientoPreventivo::where('diferencia','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m1 = MantenimientoPreventivo::where('raceitedif','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m2 = MantenimientoPreventivo::where('raceitedif','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		return view('Mantenimiento_Preventivo.reportesuspension',compact('preventivos','a1', 'a2', 'b1', 'b2','c1','c2','d1','d2','e1','e2','f1','f2','g1','g2','h1','h2','i1','i2','j1','j2','k1','k2','l1','l2','m1','m2',
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
