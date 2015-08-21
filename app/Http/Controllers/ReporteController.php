<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FechaRequest;
use App\MantenimientoDiario;
use Illuminate\Http\Request;

class ReporteController extends Controller {

		public function __construct()
	{
		$this->middleware('auth');
	}

//Morris

	public function grafica()
	{
		
		return view ('Reportes.graficas');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$operativa = \DB::select('select mes, sum(operativa) as cant from unidad_condiciones group by mes order by id');
		$inoperativa = \DB::select('select mes, sum(inoperativa) as cant from unidad_condiciones group by mes order by id');
	
		//var_dump($operativa);
		return view('Reportes.unidades',compact('inoperativa','operativa'));
		//return view('Reportes.consultarfalla');
		
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('Reportes.incidencias');
	}
	public function cedula()
	{
		return view ('Reportes.cedula');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function incidenciaunidad()
	{
		
		return view ('Reportes.incidenciaunidad');
	}
	public function store(FechaRequest $request)
	{
		//Reporte Gereral Diario
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;

		$diarios = MantenimientoDiario::where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
		
		$a1 = MantenimientoDiario::where('cnaceitem','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$a2= MantenimientoDiario::where('cnaceitem','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$b1 = MantenimientoDiario::where('cnrefrigerante','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b2= MantenimientoDiario::where('cnrefrigerante','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$c1 = MantenimientoDiario::where('airene','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c2= MantenimientoDiario::where('airene','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$d1 = MantenimientoDiario::where('cncomb','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$d2= MantenimientoDiario::where('cncomb','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$e1 = MantenimientoDiario::where('ceiasientos','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$e2= MantenimientoDiario::where('ceiasientos','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$f1 = MantenimientoDiario::where('ceecarroceria','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$f2= MantenimientoDiario::where('ceecarroceria','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$g1 = MantenimientoDiario::where('ccorrea','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$g2= MantenimientoDiario::where('ccorrea','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$h1 = MantenimientoDiario::where('ceseguridad','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$h2= MantenimientoDiario::where('ceseguridad','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$i1 = MantenimientoDiario::where('ceflucesi','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$i2= MantenimientoDiario::where('ceflucesi','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$j1 = MantenimientoDiario::where('celucesi','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$j2= MantenimientoDiario::where('celucesi','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$k1 = MantenimientoDiario::where('celucese','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$k2= MantenimientoDiario::where('celucese','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$l1 = MantenimientoDiario::where('celucesc','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$l2 = MantenimientoDiario::where('celucesc','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		$m1 = MantenimientoDiario::where('celucesem','=','Si')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$m2 = MantenimientoDiario::where('celucesem','=','No')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		
		
		return view('Mantenimiento_Diario.reportegral',compact('diarios','a1','a2','b1','b2','c1','c2','d1','d2','e1','e2',
											  'f1','f2','g1','g2','h1','h2', 'i1','i2',
											  'j1','j2',
											  'k1','k2',
											  'l1','l2', 
											  'm1','m2',
											  'inicio','fin'));
	}
	public function reporte(){

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{ 
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
