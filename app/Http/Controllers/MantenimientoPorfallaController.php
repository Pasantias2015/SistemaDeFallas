<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoPorfalla;
use App\Http\Requests\CrearMantenimientoPorfallaRequest;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;
use App\Modelo;
use App\Falla;
use App\Causa;
use App\Solucion;
use App\Unidad;



class MantenimientoPorfallaController extends Controller {

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

		$fallas =  Falla::all();
		

		return view('Mantenimiento_Porfalla.crear',compact('unidades', 'fallas'));

	
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
	public function store(CrearMantenimientoPorfallaRequest $request)
	{

		$Porfalla = MantenimientoPorfalla::create($request->all());
		$porfallas = MantenimientoPorfalla::paginate(10);
		return view('Mantenimiento_Porfalla.listado',compact('porfallas'));
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
		$porfalla = MantenimientoPorfalla::findOrFail($id);
        return view('Mantenimiento_Porfalla.ver',compact('porfalla'));
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
		$porfallas = MantenimientoPorfalla::paginate(10);
		return view('Mantenimiento_Porfalla.listado',compact('porfallas'));
	}

}
