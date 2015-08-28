<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearCausaRequest;
use App\Http\Requests\EditarCausaRequest;
use App\Falla;
use App\Causa;
use Illuminate\Http\Request;

class CausaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fallas= Falla::all();
		$causas = Causa::paginate(5);
        return view('Causa.crear',compact('causas','fallas'));
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
	public function store(CrearCausaRequest $request)
	{
		$causa = Causa::create($request->all());
		$fallas= Falla::all();
		$causas = Causa::paginate(5);
        return view('Causa.crear',compact('causas','fallas'));
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
		$causa = Causa::findOrFail($id);
        return view('Causa.editar',compact('causa'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarCausaRequest $request,$id)
	{
		$causa = Causa::findOrFail($id);
        $causa->fill($request->all());
        $causa->save();
        return redirect('causas');
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
