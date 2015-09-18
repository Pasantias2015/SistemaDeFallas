<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OrdenReparacion;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteCorrectivoCategoriaController extends Controller {

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
	public function store(FechaRequest $request)
	{
		//Reporte Categoria Mto Correctivo
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
				
		$a = OrdenReparacion::where('nivel','=','Mayor')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$b = OrdenReparacion::where('nivel','=','Medio')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$c = OrdenReparacion::where('nivel','=','Leve')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		return view('MantenimientoCorrectivo.reportecategoria',compact('inicio','fin','a','b','c'));

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
