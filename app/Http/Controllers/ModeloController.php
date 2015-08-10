<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearModeloRequest;
use App\Http\Requests\EditarModeloRequest;
use App\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller {

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
		$modelos = Modelo::paginate(5);
        return view('Modelos.crear',compact('modelos'));
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
	public function store(CrearModeloRequest $request)
	{
		$modelo = Modelo::create($request->all());
		$modelos = Modelo::paginate(5);
        return view('Modelos.crear',compact('modelos'));
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
		$modelo = Modelo::findOrFail($id);
        return view('Modelos.editar',compact('modelo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarModeloRequest $request,$id)
	{
		$modelo = Modelo::findOrFail($id);
        $modelo->fill($request->all());
        $modelo->save();
        return redirect('modelos');
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
