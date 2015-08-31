<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use App\MantenimientoPreventivo;
use Illuminate\Http\Request;

class ReporteGeneralPreventivoController extends Controller {

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
		//Reporte de Uso de Fluidos Mto Preventivo
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$preventivos = MantenimientoPreventivo::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();

		$a1 = MantenimientoPreventivo::where('correascamb','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('correascamb');
		$b1 = MantenimientoPreventivo::where('ctapas','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('ctapas');
		$c1 = MantenimientoPreventivo::where('abra','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('abra');
		$d1 = MantenimientoPreventivo::where('mague','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('mague');
		$e1 = MantenimientoPreventivo::where('clucesi','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucesi');
		$f1 = MantenimientoPreventivo::where('clucese','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucese');
		$g1 = MantenimientoPreventivo::where('clucesc','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucesc');
		$h1 = MantenimientoPreventivo::where('clucesem','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('clucesem');
		$i1 = MantenimientoPreventivo::where('ctbornes','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('ctbornes');
		
		$j1 = MantenimientoPreventivo::where('cambioaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2 = MantenimientoPreventivo::where('cambioaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k1 = MantenimientoPreventivo::where('lavadoaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2 = MantenimientoPreventivo::where('lavadoaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		$l1 = MantenimientoPreventivo::where('rlfiltroa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l2 = MantenimientoPreventivo::where('rlfiltroa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m1 = MantenimientoPreventivo::where('clubricante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m2 = MantenimientoPreventivo::where('clubricante','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$n1 = MantenimientoPreventivo::where('cfaceite','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$n2 = MantenimientoPreventivo::where('cfaceite','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$o1 = MantenimientoPreventivo::where('lfcombustible','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$o2 = MantenimientoPreventivo::where('lfcombustible','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$p1 = MantenimientoPreventivo::where('rlineascom','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$p2 = MantenimientoPreventivo::where('rlineascom','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$q1 = MantenimientoPreventivo::where('rrefrigerante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$q2 = MantenimientoPreventivo::where('rrefrigerante','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$r1 = MantenimientoPreventivo::where('fugaref','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$r2 = MantenimientoPreventivo::where('fugaref','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		return view('Mantenimiento_Preventivo.reportegral',compact('preventivos','a1', 'b1','c1','d1','e1','f1','g1','h1','i1',
																	'j1','j2','k1','k2',
																	'l1','l2','m1','m2','n1','n2','o1','o2','p1','p2','q1','q2','r1','r2',
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
