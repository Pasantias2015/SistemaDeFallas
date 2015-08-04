<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearPatioRequest;
use App\Http\Requests\EditarPatioRequest;
use Illuminate\Http\Request;
use App\Patio;

class PatioController extends Controller {

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
		$patios = Patio::paginate(5);
        return view('Patios.crear',compact('patios'));
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
	public function store(CrearPatioRequest $request)
	{
		$patio = Patio::create($request->all());
		$patios = Patio::paginate(5);
        return view('Patios.crear',compact('patios'));
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
		$patio = Patio::findOrFail($id);
        return view('Patios.editar',compact('patio'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarPatioRequest $request,$id)
	{
		$patio = Patio::findOrFail($id);
        $patio->fill($request->all());
        $patio->save();
        return redirect('patios');
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
