<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearLugarRequest;
use App\Http\Requests\EditarLugarRequest;
use App\Lugar;


use Illuminate\Http\Request;

class LugarController extends Controller {

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
		$lugares = Lugar::paginate(5);
        return view('Servicios/Lugar.crear',compact('lugares'));
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
	public function store(CrearLugarRequest $request)
	{
		$lugar = Lugar::create($request->all());
        return view('home');
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
	 	$lugar = Lugar::findOrFail($id);
        return view('Servicios/Lugar.editar',compact('lugar'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarLugarRequest $request,$id)
	{
		$lugar = Lugar::findOrFail($id);
        $lugar->fill($request->all());
        $lugar->save();
        return redirect('lugares');
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
