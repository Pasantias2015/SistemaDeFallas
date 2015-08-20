<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\MantenimientoDiario;
use App\Http\Requests\CrearMantenimientoDiarioRequest;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;
use App\User;
use App\Unidad;

class MantenimientoDiarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios =  User::all();
		$unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Diario.crear',compact('unidades','usuarios'));
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
	public function store(CrearMantenimientoDiarioRequest $request)
	{
		$diario = MantenimientoDiario::create($request->all());
		
		//Actualizacion del Kilometraje
		$actual = $request->kilometrajeactual;
		$idunidad = $diario->serviciounidadoperador->unidad->id;
		$unidad = Unidad::findOrFail($idunidad);
		
		if ($unidad->kilometrajeactual<$actual) {
			$unidad->kilometrajeactual = $actual;
		} else {
			return view('Mantenimiento_Diario.error');
		}
		
		$unidad->save();

		//verificacion del kilometraje ¿llego al Limite?
		if (($unidad->modelo->dimension)>10) {
			if ((($unidad->kilometrajeactual)-($unidad->kilometrajebase))>=10000){
				$unidad->preventivo = "Si";
				// $unidad->operativo = "No";
			} else {
				$unidad->preventivo = "No";
			}
		} else {
			if ((($unidad->kilometrajeactual)-($unidad->kilometrajebase))>=5000){
				$unidad->preventivo = "Si";
				// $unidad->operativo = "No";
			} else {
				$unidad->preventivo = "No";
			}
		}	
		$unidad->save();

        $unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Diario.crear',compact('unidades'));
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
		$diario = MantenimientoDiario::findOrFail($id);
        return view('Mantenimiento_Diario.ver',compact('diario'));
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
	public function listado()
	{
		$diarios = MantenimientoDiario::paginate(10);
		return view('Mantenimiento_Diario.listado',compact('diarios'));
	}
	public function reporteuso()
	{
		$diarios = MantenimientoDiario::paginate(10);
		
		$a1 = MantenimientoDiario::where('litrosa','>','0')->sum('litrosa');
		$b1 = MantenimientoDiario::where('litrosr','>','0')->sum('litrosr');
		$c1 = MantenimientoDiario::where('aire','>','0')->sum('aire');
		$d1 = MantenimientoDiario::where('combust','>','0')->sum('combust');
		

		return view('Reportes.diariouso',compact('diarios','a1', 'b1','c1','d1'));
	}
	public function reporteestado()
	{
		$diarios = MantenimientoDiario::paginate(10);
		
		$a1 = MantenimientoDiario::where('frefrigerante','=','Si')->count();
		$b1 = MantenimientoDiario::where('asientosmal','>','0')->sum('asientosmal');
		$c1 = MantenimientoDiario::where('rayones','>','0')->sum('rayones');
		$d1 = MantenimientoDiario::where('vidrios','>','0')->sum('vidrios');
		$e1 = MantenimientoDiario::where('acorrea','=','Si')->count();
		$f1 = MantenimientoDiario::where('camcorrea','=','falta')->count();
		$g1 = MantenimientoDiario::where('triangulo','=','falta')->count();
		$h1 = MantenimientoDiario::where('extintor','=','falta')->count();
		$i1 = MantenimientoDiario::where('conos','>','0')->count();
		$j1 = MantenimientoDiario::where('lucesimal','>','0')->sum('lucesimal');
		$k1 = MantenimientoDiario::where('elucesimal','>','0')->sum('elucesimal');
		$l1 = ((MantenimientoDiario::where('ddere','=','*')->count())+(MantenimientoDiario::where('dderc','=','*')->count())+(MantenimientoDiario::where('dderem','=','*')->count()));
		$m1 = ((MantenimientoDiario::where('dizqe','=','*')->count())+(MantenimientoDiario::where('dizqc','=','*')->count())+(MantenimientoDiario::where('dizqem','=','*')->count()));
		$n1 = ((MantenimientoDiario::where('tdere','=','*')->count())+(MantenimientoDiario::where('tderc','=','*')->count())+(MantenimientoDiario::where('tderem','=','*')->count()));
		$o1 = ((MantenimientoDiario::where('tizqe','=','*')->count())+(MantenimientoDiario::where('tizqc','=','*')->count())+(MantenimientoDiario::where('tizqem','=','*')->count()));

		return view('Reportes.diarioestado',compact('diarios','a1', 'b1','c1','d1','e1','f1','g1','h1','i1','j1','k1','l1','m1','n1','o1'));
	}

	public function reportegral1(FechaRequest $request)
	{
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;

		$diarios = MantenimientoDiario::where('fecha','>',$inicio)->where('fecha','<',$fin);

		$a1 = MantenimientoDiario::where('cnaceitem','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$a2= MantenimientoDiario::where('cnaceitem','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$b1 = MantenimientoDiario::where('cnrefrigerante','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$b2= MantenimientoDiario::where('cnrefrigerante','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$c1 = MantenimientoDiario::where('airene','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$c2= MantenimientoDiario::where('airene','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$d1 = MantenimientoDiario::where('cncomb','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$d2= MantenimientoDiario::where('cncomb','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$e1 = MantenimientoDiario::where('ceiasientos','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$e2= MantenimientoDiario::where('ceiasientos','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$f1 = MantenimientoDiario::where('ceecarroceria','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$f2= MantenimientoDiario::where('ceecarroceria','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$g1 = MantenimientoDiario::where('ccorrea','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$g2= MantenimientoDiario::where('ccorrea','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$h1 = MantenimientoDiario::where('ceseguridad','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$h2= MantenimientoDiario::where('ceseguridad','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$i1 = MantenimientoDiario::where('ceflucesi','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$i2= MantenimientoDiario::where('ceflucesi','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$j1 = MantenimientoDiario::where('celucesi','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$j2= MantenimientoDiario::where('celucesi','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$k1 = MantenimientoDiario::where('celucese','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$k2= MantenimientoDiario::where('celucese','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$l1 = MantenimientoDiario::where('celucesc','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$l2 = MantenimientoDiario::where('celucesc','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		$m1 = MantenimientoDiario::where('celucesem','=','Si')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		$m2 = MantenimientoDiario::where('celucesem','=','No')->where('fecha','>',$inicio)->where('fecha','<',$fin)->count();
		
		return view('Mantenimiento_Diario.reportegral',compact('diarios','a1','a2',
											  'b1','b2',
											  'c1','c2',
											  'd1','d2',
											  'e1','e2',
											  'f1','f2',
											  'g1','g2',
											  'h1','h2',
											  'i1','i2',
											  'j1','j2',
											  'k1','k2',
											  'l1','l2', 
											  'm1','m2' ));
	}

	public function reportegral()
	{
		$diarios = MantenimientoDiario::paginate(10);
		return view('Reportes.diario',compact('diarios'));
	}
}