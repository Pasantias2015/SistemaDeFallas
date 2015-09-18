<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearOrdenReparacionRequest;
use App\Http\Requests\EditarOrdenReparacionRequest;
use App\Herramienta;
use App\OrdenReparacion;
use App\MantenimientoCorrectivo;
use App\User;
use App\Unidad;
use App\Pieza;
use App\Marca;
use App\Modelo;
use App\Persona;
use App\Pieza_Reparacion;
use App\Herramienta_Reparacion;
use Illuminate\Http\Request;

class OrdenReparacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ordenes = OrdenReparacion::where('descripciondos','=','')->get();
        return view('OrdenReparacion.listado',compact('ordenes'));
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
	public function store(CrearOrdenReparacionRequest $request)
	{
		$reparaciones = OrdenReparacion::create($request->all());
        return view('home');
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
		$reparacion = OrdenReparacion::findOrFail($id);
		$herramientas= Herramienta::all();
		$marcas = Marca::all();
        $piezasr = Pieza_Reparacion::where('orden_id','=',$id);
        $equiposr = Herramienta_Reparacion::where('orden_id','=',$id);
		$mecanicos =  Persona::where('cargo_id','=','5')->get();
		$tecmecanicos =  Persona::where('cargo_id','=','6')->get();
		$ayudmecanicos =  Persona::where('cargo_id','=','7')->get();
       	return view('OrdenReparacion.creardos',compact('reparacion','herramientas','marcas','piezasr','equiposr','mecanicos','tecmecanicos','ayudmecanicos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarOrdenReparacionRequest $request,$id)
	{
		$orden = OrdenReparacion::findOrFail($id);
        $orden->fill($request->all());
        $orden->save();

        $correc = $orden->mantenimientocorrectivo_id;
        $correctivo = MantenimientoCorrectivo::findOrFail($correc);
        $correctivo->pendiente = "No";
        $correctivo->save();

        $idunidad = $orden->mantenimientocorrectivo->serviciounidadoperador->unidad->id;
        $unidad = Unidad::findOrFail($id);
        $unidad->operativa = "Si";
        $unidad->save();
        
        return redirect('correctivop');
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
