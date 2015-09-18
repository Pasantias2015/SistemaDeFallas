<?php  namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearUnidadRequest;
use App\Http\Requests\EditUnidadRequest;
use App\Unidad;
use App\Marca;
use App\Modelo;

class UnidadController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
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

		$unidades = Unidad::paginate(10);
		return view('Unidades.unidades',compact('unidades'));
	}
	public function asignarunidad()
	{

	
	return view ('Unidades.unidadoperador');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$marcas = Marca::all();
		$modelos = Modelo::all();
		return view('Unidades.registrarunidad',compact('marcas','modelos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearUnidadRequest $request)
	{

		$unidad = Unidad::create($request->all());
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
		$unidades = Unidad::findOrFail($id);
        	return view('Unidades.ver',compact('unidades'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
    {
        $unidad = Unidad::findOrFail($id);
        return view('Unidades.edit',compact('unidad'));
    }

    /*
     * 	 * @param  int  $id
	 * @return Response
	 */
    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function update(EditUnidadRequest $request,$id)
	{
        $unidad = Unidad::findOrFail($id);
        $unidad->fill($request->all());
        $unidad->save();
        return redirect()->back();
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
	public function listado()
	{
		$operativas = Unidad::where('operativa','=','Si')->get();
		$inoperativas = Unidad::where('operativa','=','No')->get();
		return view('Unidades.operativas',compact('operativas','inoperativas'));
	}

}
