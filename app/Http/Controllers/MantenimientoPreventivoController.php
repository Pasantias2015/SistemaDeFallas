<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoPreventivo;
use App\Http\Requests\CrearMantenimientoPreventivoRequest;
use App\ServicioUnidadOperador;
use App\Unidad;
use App\User;

use Illuminate\Http\Request;

class MantenimientoPreventivoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($preventivo)
	{
		// $unidad = Unidad::findOrFail($preventivo);
		// $serviciounidadoperador = ServicioUnidadOperador::where('unidad_id','=',$preventivo)->get();
		// $usuarios =  User::all();
		// return view('Mantenimiento_Preventivo.crear',compact('unidad','usuarios','serviciounidadoperador'));
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
	public function store(CrearMantenimientoPreventivoRequest $request)
	{
		$preventivo= MantenimientoPreventivo::create($request->all());
		//Actualizando el kilometraje base 
		$actual = $request->kilometraje;
		$unidad = $request->unidad_id;
		$unidad = Unidad::findOrFail($unidad);
		$unidad->kilometrajebase = $unidad->kilometrajeactual;
		$unidad->preventivo = "No";
		$unidad->save();

		$preventivos = Unidad::where('preventivo','=','Si')->get();
		return view('Mantenimiento_Preventivo.listadopreventivo',compact('preventivos'));
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$unidad = Unidad::findOrFail($id);
		$usuarios =  User::all();
		return view('Mantenimiento_Preventivo.crear',compact('unidad','usuarios'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$preventivo = MantenimientoPreventivo::findOrFail($id);
        return view('Mantenimiento_Preventivo.ver',compact('preventivo'));
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
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Mantenimiento_Preventivo.listado',compact('preventivos'));
	}
	public function listadoPreventivo()
	{
		$preventivos = Unidad::where('preventivo','=','Si')->get();
		return view('Mantenimiento_Preventivo.listadopreventivo',compact('preventivos'));
	}
	public function reporteuso()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Reportes.preventivouso',compact('preventivos'));
	}
	public function reportegral()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Reportes.preventivogral',compact('preventivos'));
	}
	public function reportedireccion()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Reportes.preventivodireccion',compact('preventivos'));
	}
	public function reportesuspension()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Reportes.preventivosuspension',compact('preventivos'));
	}
	public function reporteelectrico()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Reportes.preventivoelectrico',compact('preventivos'));
	}
	public function observaciones()
	{
		$preventivos = MantenimientoPreventivo::paginate(10);
		return view('Mantenimiento_Preventivo.listadoobservaciones',compact('preventivos'));
	}

}
