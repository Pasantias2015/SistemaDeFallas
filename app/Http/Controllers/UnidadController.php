<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Unidad;

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
 		$unidades = Unidad::paginate(8);
 		$unidades->setPath('unidades');
 		return view('Unidades.unidades',['unidades'=>$unidades]);
		
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
		
		return view('Unidades.registrarunidad');
		

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	
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
