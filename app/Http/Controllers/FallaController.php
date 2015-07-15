<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Falla;
use App\Tipo;
use App\Categoria;
use App\CategoriaTipo;



class FallaController extends Controller {

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



	public function registrarfalla(){
		return view('Fallas.registrarfalla');
	}
	public function registrarfallaunidadoperador(){
		return view('Fallas.registrarfallaunidadoperador');
	}
	public function registrarcategoriafalla(){
		return view('Fallas.registrarcategoriafalla');
	}
	public function registrartipofalla(){
		return view('Fallas.registrartipofalla');
	}


	public function index()
	{
			
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			
			$fallas = \DB::select( 'select f.id, c.descripcion as Categoria, t.descripcion as Tipo, f.descripcion as Falla from fallas as f, categorias as c, tipos as t, categoria_tipos as ct where (f.id = ct.id) and (ct.categoria_id = c.id) and (ct.tipo_id = t.id)' );


			
			$tipos  = Tipo::all();
			
			
			
			$categorias  = Categoria::all();
			
			
		
		return view('Fallas.create',compact('fallas','tipos','categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tipo = Tipo::whereRaw('descripcion = ?', [$request->tipo])->get();
		$categoria = Categoria::whereRaw('descripcion = ?', [$request->categoria])->get();
	
		$idt = $tipo[0]->id;
		$idc = $categoria[0]->id;

		$categoriatipo = new CategoriaTipo;
		$categoriatipo->categoria_id = $idc;
		$categoriatipo->tipo_id 	 = $idt;
		$categoriatipo->save();
		//return $categoriatipo->id;

	

		$fallas = new Falla;
		$fallas->descripcion =$request->descripcion;
		$fallas->id_categoriatipo = $categoriatipo->id;
		$fallas->save();
		//return $fallas;

		return Redirect()->back();


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
		//
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
