<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pieza_Neoplan;
use App\Http\Requests\CrearPieza_NeoplanRequest;
use Illuminate\Http\Request;


class Pieza_NeoplanController extends Controller {

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
		$piezaneo = Pieza_Neoplan::paginate(10);
        return view('Pieza_Neoplan.crear',compact('piezaneo'));
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
	public function store(CrearPieza_NeoplanRequest $request)
	{
		$piezaneoplan = Pieza_Neoplan::create($request->all());
		$piezaneo = Pieza_Neoplan::paginate(10);
        return view('Pieza_Neoplan.crear',compact('piezaneo'));
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
		$piezaneo = Pieza_Neoplan::findOrFail($id);
        return view('Pieza_Neoplan.editar',compact('piezaneo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$piezaneo = Pieza_Neoplan::findOrFail($id);
        $piezaneo->fill($request->all());
        $piezaneo->save();
        return redirect('piezaneo');
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
