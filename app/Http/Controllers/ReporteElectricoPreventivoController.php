<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FechaRequest;
use App\MantenimientoPreventivo;
use Illuminate\Http\Request;

class ReporteElectricoPreventivoController extends Controller {

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
		//Reporte de Direccion 
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$preventivos = MantenimientoPreventivo::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		//Electrico
		$a1 = MantenimientoPreventivo::where('rbaterias','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$a2 = MantenimientoPreventivo::where('rbaterias','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b1 = MantenimientoPreventivo::where('cbaterias','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b2 = MantenimientoPreventivo::where('cbaterias','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c1 = MantenimientoPreventivo::where('caguabat','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c2 = MantenimientoPreventivo::where('caguabat','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d1 = MantenimientoPreventivo::where('mvoltaje','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d2 = MantenimientoPreventivo::where('mvoltaje','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e1 = MantenimientoPreventivo::where('cbornes','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e2 = MantenimientoPreventivo::where('cbornes','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f1 = MantenimientoPreventivo::where('albornes','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f2 = MantenimientoPreventivo::where('albornes','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g1 = MantenimientoPreventivo::where('cdestino','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g2 = MantenimientoPreventivo::where('cdestino','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h1 = MantenimientoPreventivo::where('cornetas','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h2 = MantenimientoPreventivo::where('cornetas','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		//frenos
		$i1 = MantenimientoPreventivo::where('bandas','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i2 = MantenimientoPreventivo::where('bandas','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j1 = MantenimientoPreventivo::where('discos','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2 = MantenimientoPreventivo::where('discos','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		//A/A
		$k1 = MantenimientoPreventivo::where('cambioaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2 = MantenimientoPreventivo::where('cambioaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l1 = MantenimientoPreventivo::where('lavadoaa','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l2 = MantenimientoPreventivo::where('lavadoaa','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		return view('Mantenimiento_Preventivo.reporteelectrico',compact('preventivos','a1', 'a2', 'b1', 'b2','c1','c2','d1','d2','e1','e2','f1','f2','g1','g2','h1','h2','i1','i2','j1','j2','k1','k2','l1','l2',
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
