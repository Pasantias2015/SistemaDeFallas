<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Servicio;
use App\UnidadServicio;
use App\ServicioOperador;

use Illuminate\Http\Request;

class TransaccionController extends Controller {


	public function servicio_operador()
	{
		$servicios = Servicio::all();
		//$operadores = ServicioOperador::all();
				
		return view('Transacciones.serviciooperador',compact('servicios'));

	}
	public function servicio_unidad()
	{
		$servicios = Servicio::all();
		$unidades = UnidadServicio::all();
		
		return view('Transacciones.serviciounidad',compact('servicios','unidades'));
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('Reportes.cedula');
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
	public function store()
	{
		//
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
