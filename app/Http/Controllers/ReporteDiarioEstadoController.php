<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoDiario;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteDiarioEstadoController extends Controller {

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
		//Reporte de Uso de Fluidos Mto Diario
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		
		$diarios = MantenimientoDiario::paginate(10);
		
		$a1 = MantenimientoDiario::where('frefrigerante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b1 = MantenimientoDiario::where('asientosmal','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('asientosmal');
		$c1 = MantenimientoDiario::where('rayones','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('rayones');
		$d1 = MantenimientoDiario::where('vidrios','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('vidrios');
		$e1 = MantenimientoDiario::where('acorrea','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f1 = MantenimientoDiario::where('camcorrea','=','falta')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g1 = MantenimientoDiario::where('triangulo','=','falta')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h1 = MantenimientoDiario::where('extintor','=','falta')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i1 = MantenimientoDiario::where('conos','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j1 = MantenimientoDiario::where('lucesimal','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('lucesimal');
		$k1 = MantenimientoDiario::where('elucesimal','>','0')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->sum('elucesimal');
		$l1 = ((MantenimientoDiario::where('ddere','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('dderc','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('dderem','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count()));
		$m1 = ((MantenimientoDiario::where('dizqe','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('dizqc','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('dizqem','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count()));
		$n1 = ((MantenimientoDiario::where('tdere','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('tderc','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('tderem','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count()));
		$o1 = ((MantenimientoDiario::where('tizqe','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('tizqc','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count())+(MantenimientoDiario::where('tizqem','=','*')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count()));
		$p1 = MantenimientoDiario::where('reparado','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		return view('Mantenimiento_Diario.reporteestado',compact('diarios','inicio','fin','a1', 'b1','c1','d1','e1','f1','g1','h1','i1','j1','k1','l1','m1','n1','o1','p1'));

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
