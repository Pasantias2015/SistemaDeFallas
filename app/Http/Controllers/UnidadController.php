<?php  namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearUnidadRequest;
use App\Http\Requests\EditUnidadRequest;
use App\Unidad;
use App\Marca;

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

	/*
	$html =
	  '<html>Title<body>'.
	  '</body></html>';
	 '<p>Perro Cagon</p>'.
	 
	$dompdf = new \DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream("Reporte.pdf");
	*/
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
		return view('Unidades.registrarunidad',compact('marcas'));
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

}
