<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearMarcaRequest;
use App\Http\Requests\EditarMarcaRequest;
use App\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller {

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
		$marcas = Marca::paginate(10);
        return view('Marcas.crear',compact('marcas'));
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
	public function store(CrearMarcaRequest $request)
	{
		$marca = Marca::create($request->all());
		$marcas = Marca::paginate(5);
        return view('Marcas.crear',compact('marcas'));
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
		$marca = Marca::findOrFail($id);
        return view('Marcas.editar',compact('marca'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarMarcaRequest $request,$id)
	{
		$marca = Marca::findOrFail($id);
        $marca->fill($request->all());
        $marca->save();
        return redirect('marcas');
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
