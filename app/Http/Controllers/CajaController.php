<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearCajaRequest;
use App\Http\Requests\EditarCajaRequest;
use App\Caja;
use Illuminate\Http\Request;

class CajaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$cajas = Caja::paginate(5);
        return view('Cajas.crear',compact('cajas'));
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
	public function store(CrearCajaRequest $request)
	{
		$caja = Caja::create($request->all());
		$cajas = Caja::paginate(5);
        return view('Cajas.crear',compact('cajas'));
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
		$caja = Caja::findOrFail($id);
        return view('Cajas.editar',compact('caja'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarCajaRequest $request,$id)
	{
		$caja = Caja::findOrFail($id);
        $caja->fill($request->all());
        $caja->save();
        return redirect('cajas');
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
