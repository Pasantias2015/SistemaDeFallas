<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearPuestoRequest;
use App\Http\Requests\EditarPuestoRequest;
use Illuminate\Http\Request;
use App\Puesto;
use App\Patio;


class PuestoController extends Controller {

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
		$patios= Patio::all();
		$puestos = Puesto::paginate(5);
        return view('Puesto.crear',compact('puestos','patios'));
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
	public function store(CrearPuestoRequest $request)
	{
		
		$puesto = Puesto::create($request->all());
		$patios= Patio::all();
		$puestos = Puesto::paginate(5);
        return view('Puesto.crear',compact('puestos','patios'));
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
		$puesto = Puesto::findOrFail($id);
        return view('Puesto.editar',compact('puesto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarPuestoRequest $request,$id)
	{
		$puesto = Puesto::findOrFail($id);
        $puesto->fill($request->all());
        $puesto->save();
        return redirect('puestos');
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
