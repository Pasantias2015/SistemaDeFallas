<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearAlmacenRequest;
use App\Http\Requests\EditarAlmacenRequest;
use Response;
use App\Almacen;
use App\Caja;
use App\Herramienta;
use App\Pieza;
use App\Pieza_Neoplan; 
use App\Grupo;
use App\Seccion;
use App\Modelo;	
use App\Marca;	
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
		$cajas = Caja::all();
		$piezas = Pieza::all();
		$marcas = Marca::all();
		$grupos = Grupo::all();
		$secciones = Seccion::all();
		$modelos = Modelo::all();
		$almacenes = Almacen::paginate(10);
		$piezasneo = Pieza_Neoplan::all();
        return view('Almacen.almacen',compact('herramientas','piezas','grupos','secciones','modelos','almacenes','cajas','marcas','piezasneo'));
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
		$cajas = Caja::all();
		$piezas = Pieza::all();
		$marcas = Marca::all();
		$grupos = Grupo::all();
		$secciones = Seccion::all();
		$modelos = Modelo::all();
		$piezasneo = Pieza_Neoplan::all();
		$almacenes = Almacen::paginate(10);
        return view('Almacen.almacen',compact('herramientas','piezas','grupos','secciones','modelos','almacenes','cajas','marcas','piezasneo'));
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
		$cantidadActual=$request->cantidad+$request->cantidadnueva; //buscar!
		$almacen = Almacen::findOrFail($id);
		$almacen->cantidad = $cantidadActual;
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

	// funcion para regresar la información de los modelos al Select de los modelos
	public function listaModelos()
    {
    	// Buscamos todos los modelos de nuetra base
        $modelos = Modelo::all();
        // Regresamos los modelos obtenidos de la consulta
        return Response::json($modelos);
    }
// funcion para regresar la información de las seccion que pertenecen al modelo selecionado
    public function listaSeccion()
    {
    	// Recibimos ID del modelo selecionado
        $id = Request::input('id');
        // buscamos las seccion que pertenecen al estado
        $seccion = Seccion::where('seccion_id',$id)->get();
	//  Regresamos las seccion obtenidas de la consulta
        return Response::json($seccion);
    }

}
