<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Falla;
use App\Unidad;
use App\Pieza_Neoplan;
use App\MantenimientoPorfalla;
use App\PiezaPorfalla;
use App\Http\Requests\CrearPiezaPorFallaRequest;
use Illuminate\Http\Request;

class PiezaPorFallaController extends Controller {

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
	public function store(CrearPiezaPorFallaRequest $request)
	{
		$pfalla = PiezaPorFalla::create($request->all());
		$fallaid = $pfalla->id_porfallas;
		$piezasneo = Pieza_Neoplan::all();
		$piezas = PiezaPorfalla::where('id_porfallas','=',$fallaid)->get();
		return view('Mantenimiento_Porfalla.detallefalla',compact('piezasneo','piezas','fallaid'));
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
