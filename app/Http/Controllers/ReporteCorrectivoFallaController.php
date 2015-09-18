<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MantenimientoCorrectivo;
use App\Unidad;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;

class ReporteCorrectivoFallaController extends Controller {

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
		//Reporte Sistema Mto Correctivo
		$inicio= $request->fechainicio;
		$fin = $request->fechafin;
				
		$prop = MantenimientoCorrectivo::where('sistema','=','Sistema de Propulsores')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$neu = MantenimientoCorrectivo::where('sistema','=','Sistema Neumatico')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$car = MantenimientoCorrectivo::where('sistema','=','Sistema de Carroceria')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$elec = MantenimientoCorrectivo::where('sistema','=','Sistema Electrico')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();
		$dir = MantenimientoCorrectivo::where('sistema','=','Sistema de Direccion')->where('fecha','>=',$inicio)->where('fecha','<=',$fin)->count();

		return view('MantenimientoCorrectivo.reportesistema',compact('prop','neu','car','elec','dir','inicio','fin'));
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
