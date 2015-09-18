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
use App\Modelo;

class MantenimientoDiarioController extends Controller {

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
		$modelos = Modelo::where('marca_id','=',1)->get();
			
		for ($i=0; $i <count($modelos) ; $i++) { 
			$uno[$i]=$modelos[$i]->id;
		}

		$unidades =  Unidad::whereIn('modelo_id', $uno)->get();
		return view('Mantenimiento_Diario.crear',compact('unidades'));
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
		$diario = $request->unidad_id;
				
		//Actualizacion del Kilometraje
		$actual = $request->kilometrajeactual;
		$idunidad = $diario;
		$unidad = Unidad::findOrFail($idunidad);
		$hola = MantenimientoDiario::where('unidad_id','=',$request->unidad_id)->where('fecha','=',$request->fecha)->get();
	
		if (count($hola)==0) {
			if ($unidad->kilometrajeactual<$actual) {
			$unidad->kilometrajeactual = $actual;
				} else {
					return view('Mantenimiento_Diario.error');
				}
				//verificacion del kilometraje ¿llego al Limite?
				if (($unidad->modelo->dimension)>10) {
					if ((($unidad->kilometrajeactual)-($unidad->kilometrajebase))>=10000){
						$unidad->preventivo = "Si";
						$unidad->operativo = "No";
					} else {
						$unidad->preventivo = "No";
					}
				} else {
					if ((($unidad->kilometrajeactual)-($unidad->kilometrajebase))>=5000){
						$unidad->preventivo = "Si";
						$unidad->operativo = "No";
					} else {
						$unidad->preventivo = "No";
					}
				}	
				$unidad->save();
				
				$diario = MantenimientoDiario::create($request->all());
		       
		       $modelos = Modelo::where('marca_id','=',1)->get();
			
		for ($i=0; $i <count($modelos) ; $i++) { 
			$uno[$i]=$modelos[$i]->id;
		}

		$unidades =  Unidad::whereIn('modelo_id', $uno)->get();
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