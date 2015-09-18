<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
		//Reporte de Gral 
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$preventivos = MantenimientoPreventivo::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		//A/A
		$j1a = MantenimientoPreventivo::where('cambioaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2a = MantenimientoPreventivo::where('cambioaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k1a = MantenimientoPreventivo::where('lavadoaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2a = MantenimientoPreventivo::where('lavadoaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
 		
 		//Mantenimiento de motor
		$a1 = MantenimientoPreventivo::where('rlfiltroa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$a2 = MantenimientoPreventivo::where('rlfiltroa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b1 = MantenimientoPreventivo::where('clubricante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b2 = MantenimientoPreventivo::where('clubricante','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c1 = MantenimientoPreventivo::where('cfaceite','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c2 = MantenimientoPreventivo::where('cfaceite','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d1 = MantenimientoPreventivo::where('lfcombustible','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d2 = MantenimientoPreventivo::where('lfcombustible','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e1 = MantenimientoPreventivo::where('rlineascom','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e2 = MantenimientoPreventivo::where('rlineascom','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f1 = MantenimientoPreventivo::where('rrefrigerante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f2 = MantenimientoPreventivo::where('rrefrigerante','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g1 = MantenimientoPreventivo::where('fugaref','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g2 = MantenimientoPreventivo::where('fugaref','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h1 = MantenimientoPreventivo::where('rcorrea','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h2 = MantenimientoPreventivo::where('rcorrea','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i1 = MantenimientoPreventivo::where('ccorrea','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i2 = MantenimientoPreventivo::where('ccorrea','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j1 = MantenimientoPreventivo::where('tapasr','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2 = MantenimientoPreventivo::where('tapasr','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k1 = MantenimientoPreventivo::where('rtapasr','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2 = MantenimientoPreventivo::where('rtapasr','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l1 = MantenimientoPreventivo::where('lavadom','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l2 = MantenimientoPreventivo::where('lavadom','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m1 = MantenimientoPreventivo::where('lfgases','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m2 = MantenimientoPreventivo::where('lfgases','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$n1 = MantenimientoPreventivo::where('cambfiltro','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$n2 = MantenimientoPreventivo::where('cambfiltro','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		return view('Mantenimiento_Preventivo.reportegral',compact('preventivos','a1', 'a2', 'b1', 'b2','c1','c2','d1','d2','e1','e2','f1','f2','g1','g2','h1','h2','i1','i2','j1','j2','k1','k2','l1','l2','m1','m2','n1','n2',
																	'j1a','j2a','k1a','k2a',
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
