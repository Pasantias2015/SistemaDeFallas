<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearHerramientaRequest;
use App\Http\Requests\EditarHerramientaRequest;
use App\Herramienta;
use Illuminate\Http\Request;

class HerramientaController extends Controller {

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
		
		$herramientas = Herramienta::paginate(5);
        return view('Herramientas.crear',compact('herramientas'));
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
	public function store(CrearHerramientaRequest $request)
	{
		$herramienta = Herramienta::create($request->all());
		$herramientas = Herramienta::paginate(5);
        return view('Herramientas.crear',compact('herramientas'));
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
		$herramienta = Herramienta::findOrFail($id);
        return view('Herramientas.editar',compact('herramienta'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarHerramientaRequest $request,$id)
	{
		$herramienta = Herramienta::findOrFail($id);
        $herramienta->fill($request->all());
        $herramienta->save();
        return redirect('herramientas');
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
