<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearTipoMantenimientoRequest;
use App\Http\Requests\EditarTipoMantenimientoRequest;
use App\TipoMantenimiento;
use Illuminate\Http\Request;

class TipoMantenimientoController extends Controller {

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
		$tipomantenimientos = TipoMantenimiento::paginate(5);
        return view('TipoMantenimientos.crear',compact('tipomantenimientos'));
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
	public function store(CrearTipoMantenimientoRequest $request)
	{
		$tipomantenimiento = TipoMantenimiento::create($request->all());
		$tipomantenimientos = TipoMantenimiento::paginate(5);
        return view('TipoMantenimientos.crear',compact('tipomantenimientos'));
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
		$tipomantenimiento = TipoMantenimiento::findOrFail($id);
        return view('TipoMantenimientos.editar',compact('tipomantenimiento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarTipoMantenimientoRequest $request,$id)
	{
		$tipomantenimiento = TipoMantenimiento::findOrFail($id);
        $tipomantenimiento->fill($request->all());
        $tipomantenimiento->save();
        return redirect('tipoM');
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
