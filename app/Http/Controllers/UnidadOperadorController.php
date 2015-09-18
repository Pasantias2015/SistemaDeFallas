<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearServicioUnidadOperadorRequest;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\Operador;
use App\Unidad;
use App\Servicio;
use Illuminate\Http\Request;

class UnidadOperadorController extends Controller {

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
		$servicios = Servicio::all();
		$unidades = Unidad::all();
		$operador = Operador::all();

		$cont = count($operador);
		for ($i=0; $i<$cont; $i++){ 
			 $fecha = $operador[$i]->fechaasignacion;
			 $segundos = strtotime('now') - strtotime($fecha);
			 $diferencia_dias=intval($segundos/60/60/24);
			if ($diferencia_dias > 21) {
				 $operador[$i]->estado = "Disponible";
				 $operador[$i]->save();
			} 			
		}	
		$operadores = Operador::where('estado','=','Disponible')->get();
		$asignadas = ServicioUnidadOperador::paginate(20);
		return view('UnidadOperador.asignar',compact('servicios','unidades','operadores','asignadas'));
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
	public function store(CrearServicioUnidadOperadorRequest $request)
	{
		$total = ServicioUnidadOperador::where('unidad_id','=',$request->unidad_id)->where('fecha','=',$request->fecha)->count('unidad_id');
		if ($total>=3) {
			return view('UnidadOperador.error');
		} else {
			$servunidoper = ServicioUnidadOperador::create($request->all());
			$id = $request->operador_id;
			$operador = Operador::findOrFail($id); 
			$operador->estado = "Asignado";
			$operador->fechaasignacion = $request->fecha;
			$operador->save();
			$servicios = Servicio::all();
			$unidades = Unidad::all();
			$operadores = Operador::where('estado','=',"Disponible")->get();
			$asignadas = ServicioUnidadOperador::paginate(20);
			return view('UnidadOperador.asignar',compact('servicios','unidades','operadores','asignadas'));
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
