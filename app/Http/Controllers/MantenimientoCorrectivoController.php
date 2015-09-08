<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearMantenimientoCorrectivoRequest;
use App\Http\Requests\EditarMantenimientoCorrectivoRequest;
use App\Herramienta;
use App\OrdenReparacion;
use App\MantenimientoCorrectivo;
use App\User;
use App\Unidad;
use App\ServicioUnidadOperador;
use App\Operador;
use App\Seccion;
use App\Pieza;
use App\Grupo;
use App\Modelo;
use Illuminate\Http\Request;

class MantenimientoCorrectivoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios= User::all();
		$unidades= Unidad::all();
		$operadores= Operador::all();
		$secciones= Seccion::all();
		$servicios = ServicioUnidadOperador::all();
		$mantenimientocorrectivos = MantenimientoCorrectivo::paginate(10);
        return view('MantenimientoCorrectivo.crear',compact('unidades','usuarios','operadores','secciones','mantenimientocorrectivos','servicios'));
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
	public function store(CrearMantenimientoCorrectivoRequest $request)
	{
		$mantenimientocorrectivos = MantenimientoCorrectivo::create($request->all());
		
		$id = $mantenimientocorrectivos->serviciounidadoperador->unidad_id;
		$unidad = Unidad::findOrFail($id);
		$unidad->operativa = "No";
		$unidad->save();

		$correctivos = MantenimientoCorrectivo::paginate(10);
        return view('MantenimientoCorrectivo.listado',compact('correctivos'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$correctivo = MantenimientoCorrectivo::findOrFail($id);
        return view('MantenimientoCorrectivo.verreporte',compact('correctivo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$correctivo = MantenimientoCorrectivo::findOrFail($id);
        return view('MantenimientoCorrectivo.ver',compact('correctivo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarMantenimientoCorrectivoRequest $request,$id)
	{
		$rev = $request->revisado;
		$correctivo = MantenimientoCorrectivo::findOrFail($id);
		$correctivo->revisado = $rev;
		$correctivo->save();

		$usuarios= User::all();
		$piezas= Pieza::all();
		$herramientas= Herramienta::all();
		$secciones= Seccion::all();
		$grupos= Grupo::all();
		$modelos= Modelo::all();
		$reparaciones = OrdenReparacion::paginate(5);

		return view('OrdenReparacion.crear',compact('correctivo','usuarios','piezas','herramientas','secciones','grupos','modelos','reparaciones'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}
	 public function pendientes(){
	 	$correctivos = MantenimientoCorrectivo::where('pendiente','=','Si')->get();
        return view('MantenimientoCorrectivo.pendientes',compact('correctivos'));
	 }
	 public function listado(){
	 	$correctivos = MantenimientoCorrectivo::paginate(10);
        return view('MantenimientoCorrectivo.listado',compact('correctivos'));
	 }
}
