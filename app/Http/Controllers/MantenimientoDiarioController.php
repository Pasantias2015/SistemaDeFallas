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
		$diario = $request->serviciounidadoperador_id;
				
		//Actualizacion del Kilometraje
		$actual = $request->kilometrajeactual;
		$serv = ServicioUnidadOperador::findOrFail($diario);
		$idunidad = $serv->unidad_id;
		$unidad = Unidad::findOrFail($idunidad);
		$hola = MantenimientoDiario::where('serviciounidadoperador_id','=',$request->serviciounidadoperador_id)->where('fecha','=',$request->fecha)->get();
	
		if (count($hola)==0) {
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
				
				$diario = MantenimientoDiario::create($request->all());
		       
		        $unidades =  ServicioUnidadOperador::all();
				return view('Mantenimiento_Diario.crear',compact('unidades'));
		} else {
			return view('Mantenimiento_Diario.errorunidad');
		}		
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
	public function update()
	{
		
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
		return view('Reportes.diariouso',compact('diarios'));
	}
	public function reporteestado()
	{
		$diarios = MantenimientoDiario::paginate(10);	
		return view('Reportes.diarioestado',compact('diarios'));
	}
	
	public function reportegral()
	{
		$diarios = MantenimientoDiario::paginate(10);
		return view('Reportes.diario',compact('diarios'));
	}

	public function reporteunidad()
	{
		$unidades = Unidad::all();
		return view('Reportes.unidaddiario',compact('unidades'));
	}

}