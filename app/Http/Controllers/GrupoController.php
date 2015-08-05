<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearGrupoRequest;
use App\Http\Requests\EditarGrupoRequest;
use App\Seccion;
use App\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$secciones= Seccion::all();
		$grupos = Grupo::paginate(5);
        return view('Grupo.crear',compact('grupos','secciones'));
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
	public function store(CrearGrupoRequest $request)
	{
		$grupo = Grupo::create($request->all());
		$secciones= Seccion::all();
		$grupos = Grupo::paginate(5);
        return view('Grupo.crear',compact('grupos','secciones'));
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
		$grupo = Grupo::findOrFail($id);
        return view('Grupo.editar',compact('grupo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarGrupoRequest $request,$id)
	{
		$grupo = Grupo::findOrFail($id);
        $grupo->fill($request->all());
        $grupo->save();
        return redirect('grupos');
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
