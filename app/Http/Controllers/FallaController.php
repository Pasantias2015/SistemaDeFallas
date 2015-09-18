<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearFallaRequest;
use App\Http\Requests\EditarFallaRequest;
use App\Unidad;
use App\Falla;
use Illuminate\Http\Request;

class FallaController extends Controller {

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
		$unidades= Unidad::all();
		$fallas = Falla::paginate(5);
        return view('Falla.crear',compact('fallas','unidades'));
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
	public function store(CrearFallaRequest $request)
	{
		$falla = Falla::create($request->all());
		$unidades= Unidad::all();
		$fallas = Falla::paginate(5);
        return view('Falla.crear',compact('fallas','unidades'));
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
		$falla = Falla::findOrFail($id);
        return view('Falla.editar',compact('falla'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarFallaRequest $request,$id)
	{
		$falla = Falla::findOrFail($id);
        $falla->fill($request->all());
        $falla->save();
        return redirect('fallas');
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
