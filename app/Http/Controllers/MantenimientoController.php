<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearMantenimientoRequest;
use App\Http\Requests\EditarMantenimientoRequest;
use App\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller {

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
		$mantenimientos = Mantenimiento::paginate(5);
        return view('Mantenimientos.crear',compact('mantenimientos'));
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
	public function store(CrearMantenimientoRequest $request)
	{
		$mantenimiento = Mantenimiento::create($request->all());
		$mantenimientos = Mantenimiento::paginate(5);
        return view('Mantenimientos.crear',compact('mantenimientos'));
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
		$mantenimiento =  Mantenimiento::findOrFail($id);
        return view('Mantenimientos.editar',compact('mantenimiento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarMantenimientoRequest $request,$id)
	{
		$mantenimiento = Mantenimiento::findOrFail($id);
        $mantenimiento->fill($request->all());
        $mantenimiento->save();
        return redirect('mantenimiento');
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
	public function preventivo()
	{
		return view('Mantenimiento_Preventivo.crear');

	}

}
