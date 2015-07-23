<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReporteController extends Controller {

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
		//
		$operativa = \DB::select('select mes, sum(operativa) as cant from unidad_condiciones group by mes order by id');
		$inoperativa = \DB::select('select mes, sum(inoperativa) as cant from unidad_condiciones group by mes order by id');
	
		//var_dump($operativa);
		return view('Reportes.unidades',compact('inoperativa','operativa'));
		//return view('Reportes.consultarfalla');
		
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('Reportes.incidencias');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function incidenciaunidad()
	{
		
		return view ('Reportes.incidenciaunidad');
	}
	public function store()
	{
		
		
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
