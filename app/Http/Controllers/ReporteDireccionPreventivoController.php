<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use App\MantenimientoPreventivo;
use Illuminate\Http\Request;

class ReporteDireccionPreventivoController extends Controller {

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
		//Reporte de Direccion 
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$preventivos = MantenimientoPreventivo::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		//Dirección
		$a1 = MantenimientoPreventivo::where('rsalidaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$a2 = MantenimientoPreventivo::where('rsalidaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b1 = MantenimientoPreventivo::where('fugaceite','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b2 = MantenimientoPreventivo::where('fugaceite','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c1 = MantenimientoPreventivo::where('rjuegovolante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c2 = MantenimientoPreventivo::where('rjuegovolante','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d1 = MantenimientoPreventivo::where('abarrasy','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d2 = MantenimientoPreventivo::where('abarrasy','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e1 = MantenimientoPreventivo::where('raengrase','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e2 = MantenimientoPreventivo::where('raengrase','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f1 = MantenimientoPreventivo::where('rnadireccion','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f2 = MantenimientoPreventivo::where('rnadireccion','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		//Embrague
		$g1 = MantenimientoPreventivo::where('ceembrague','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g2 = MantenimientoPreventivo::where('ceembrague','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		//Enfriamiento
		$h1 = MantenimientoPreventivo::where('lavador','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h2 = MantenimientoPreventivo::where('lavador','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i1 = MantenimientoPreventivo::where('cabmangueras','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i2 = MantenimientoPreventivo::where('cabmangueras','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
			//Luces
		$j1 = MantenimientoPreventivo::where('rcluces','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2 = MantenimientoPreventivo::where('rcluces','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k1 = MantenimientoPreventivo::where('camlucesi','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2 = MantenimientoPreventivo::where('camlucesi','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l1 = MantenimientoPreventivo::where('camlucese','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l2 = MantenimientoPreventivo::where('camlucese','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m1 = MantenimientoPreventivo::where('camlucesc','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m2 = MantenimientoPreventivo::where('camlucesc','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$n1 = MantenimientoPreventivo::where('camlucesem','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$n2 = MantenimientoPreventivo::where('camlucesem','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();	
		
		return view('Mantenimiento_Preventivo.reportedireccion',compact('preventivos','a1', 'a2', 'b1', 'b2','c1','c2','d1','d2','e1','e2','f1','f2','g1','g2','h1','h2','i1','i2','j1','j2','k1','k2','l1','l2','m1','m2','n1','n2',
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
