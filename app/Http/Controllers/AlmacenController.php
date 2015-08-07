<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearAlmacenRequest;
use App\Http\Requests\EditarAlmacenRequest;
use App\Almacen;
use App\Herramienta;
use App\Pieza;
use App\Grupo;
use App\Seccion;
use App\Modelo;	
use Illuminate\Http\Request;

class AlmacenController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$herramientas = Herramienta::all();
		$piezas = Pieza::all();
		$grupos = Grupo::all();
		$secciones = Seccion::all();
		$modelos = Modelo::all();
		$almacenes = Almacen::paginate(10);
        return view('Almacen.almacen',compact('herramientas','piezas','grupos','secciones','modelos','almacenes'));
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
	public function store(CrearAlmacenRequest $request)
	{
		$almacen = Almacen::create($request->all());
		$herramientas = Herramienta::all();
		$piezas = Pieza::all();
		$grupos = Grupo::all();
		$secciones = Seccion::all();
		$modelos = Modelo::all();
		$almacenes = Almacen::paginate(10);
        return view('Almacen.almacen',compact('herramientas','piezas','grupos','secciones','modelos','almacenes'));
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
	public function edit( $id)
	{
		$almacen =  Almacen::findOrFail($id);
        return view('Almacen.actualizarAlmacen',compact('almacen'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarAlmacenRequest $request,$id)
	{
		 return $request->cantidad+$request->cantidadnueva;
		$hola=array('cant' => $request->cantidad+$request->cantidadnueva);
		$almacen = Almacen::findOrFail($id);
		$almacen->fill($request->cantidad+$request->cantidadnueva);
        $almacen->save();
        return redirect('almacen');
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
