<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoCorrectivo;
use App\ServicioUnidadOperador;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteCorrectivoController extends Controller {

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
		//Reporte General Mto Correctivo
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
		$uni = Unidad::findOrFail($request->unidad_id);
		$id = $uni->id;
		
		$correctivos = MantenimientoCorrectivo::where('serviciounidadoperador_id','=',$id)->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->get();
			
		return view('MantenimientoCorrectivo.reportegeneral',compact('correctivos','uni'));
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
		$correctivo = MantenimientoCorrectivo::findOrFail($id);
        	return view('MantenimientoCorrectivo.ver',compact('correctivo'));
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
