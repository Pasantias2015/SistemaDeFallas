<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearDetalleSolicitudRequest;
use App\Http\Requests\CrearEntregadoRequest;
use App\Http\Requests\EditarSolicitudRequest;
use Illuminate\Http\Request;
use App\User;
use App\Persona;
use App\Almacen;
use App\Mecanico;
use App\Solicitud;
use App\Entregado;
use App\DetalleSolicitud;

class DetalleSolicitudController extends Controller {

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
	public function store(CrearDetalleSolicitudRequest $request)
	{
		$detsolicitud = DetalleSolicitud::create($request->all());
		
		$herramientas = Almacen::where('tipo','=','Herramienta')->get();
		$articulos = Almacen::where('tipo','=','Articulo')->get();
		$fluidos = Almacen::where('tipo','=','Fluidos')->get();
		$piezas = Almacen::where('tipo','=','Pieza Yutong')->get();
		$piezasneo = Almacen::where('tipo','=','Pieza Neoplan')->get();
		
		$id= $detsolicitud->solicitud_id;
		$detalles = DetalleSolicitud::where('solicitud_id','=',$id)->get();
		
		$solicitud = Solicitud::findOrFail($id);
        return view('Almacen.detallesolicitud',compact('detalles','herramientas','articulos','fluidos','piezas','solicitud','piezasneo'));

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
	public function update()
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
