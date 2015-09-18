<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoSemanal;
use App\Http\Requests\CrearMantenimientoSemanalRequest;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;
use App\Modelo;
use App\Unidad;

class MantenimientoSemanalController extends Controller {

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
		return view('Mantenimiento_Semanal.crear',compact('unidades'));		
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
	public function store(CrearMantenimientoSemanalRequest $request)
	{
		$semanal = MantenimientoSemanal::create($request->all());
		$semanales = MantenimientoSemanal::paginate(10);
		return view('Mantenimiento_Semanal.listado',compact('semanales'));
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
		$semanal = MantenimientoSemanal::findOrFail($id);
        return view('Mantenimiento_Semanal.ver',compact('semanal'));
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
		$semanales = MantenimientoSemanal::paginate(10);
		return view('Mantenimiento_Semanal.listado',compact('semanales'));
	}
}
