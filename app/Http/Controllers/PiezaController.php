<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearPiezaRequest;
use App\Http\Requests\EditarPiezaRequest;
use App\Grupo;
use App\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$grupos= Grupo::all();
		$piezas = Pieza::paginate(5);
        return view('Piezas.crear',compact('piezas','grupos'));
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
	public function store(CrearPiezaRequest $request)
	{
		$pieza = Pieza::create($request->all());
		$grupos= Grupo::all();
		$piezas = Pieza::paginate(5);
        return view('Piezas.crear',compact('piezas','grupos'));
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
		$pieza = Pieza::findOrFail($id);
        return view('Piezas.editar',compact('pieza'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarPiezaRequest $request,$id)
	{
		$pieza = Pieza::findOrFail($id);
        $pieza->fill($request->all());
        $pieza->save();
        return redirect('piezas');
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
