<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoMensual;
use App\Http\Requests\CrearMantenimientoMensualRequest;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;
use App\Modelo;
use App\Unidad;

class MantenimientoMensualController extends Controller {

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
		$modelos = Modelo::where('marca_id','=',2)->get();
			
		for ($i=0; $i <count($modelos) ; $i++) { 
			$uno[$i]=$modelos[$i]->id;
		}

		$unidades =  Unidad::whereIn('modelo_id', $uno)->get();
		return view('Mantenimiento_Mensual.crear',compact('unidades'));	
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
	public function store(CrearMantenimientoMensualRequest $request)
	{
		$mensual = MantenimientoMensual::create($request->all());
		$mensuales = MantenimientoMensual::paginate(10);
		return view('Mantenimiento_Mensual.listado',compact('mensuales'));
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
		$mensual = MantenimientoMensual::findOrFail($id);
        return view('Mantenimiento_Mensual.ver',compact('mensual'));
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
		$mensuales = MantenimientoMensual::paginate(10);
		return view('Mantenimiento_Mensual.listado',compact('mensuales'));
	}
}
