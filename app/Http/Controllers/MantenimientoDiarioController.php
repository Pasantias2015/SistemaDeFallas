<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\MantenimientoDiario;
use App\Http\Requests\CrearMantenimientoDiarioRequest;
use Illuminate\Http\Request;
use App\User;
use App\Unidad;

class MantenimientoDiarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios =  User::all();
		$unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Diario.crear',compact('unidades','usuarios'));
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
	public function store(CrearMantenimientoDiarioRequest $request)
	{
		$diario = MantenimientoDiario::create($request->all());
		
		//Actualizacion del Kilometraje
		$actual = $request->kilometrajeactual;
		$idunidad = $diario->serviciounidadoperador->unidad->id;
		$unidad = Unidad::findOrFail($idunidad);
		
		if ($unidad->kilometrajeactual<$actual) {
			$unidad->kilometrajeactual = $actual;
		} else {
			return view('Mantenimiento_Diario.error');
		}
		
		$unidad->save();

		//verificacion del kilometraje ¿llego al Limite?
		if (($unidad->modelo->dimension)>10) {
			if ((($unidad->kilometrajeactual)-($unidad->kilometrajebase))>=10000){
				$unidad->preventivo = "Si";
				// $unidad->operativo = "No";
			} else {
				$unidad->preventivo = "No";
			}
		} else {
			if ((($unidad->kilometrajeactual)-($unidad->kilometrajebase))>=5000){
				$unidad->preventivo = "Si";
				// $unidad->operativo = "No";
			} else {
				$unidad->preventivo = "No";
			}
		}	
		$unidad->save();

        $unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Diario.crear',compact('unidades'));
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
		$diario = MantenimientoDiario::findOrFail($id);
        return view('Mantenimiento_Diario.ver',compact('diario'));
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
	public function listado()
	{
		$diarios = MantenimientoDiario::paginate(10);
		return view('Mantenimiento_Diario.listado',compact('diarios'));
	}
	
		

	public function reporte()
	{
		$diarios = MantenimientoDiario::paginate(10);
		return view('Reportes.diario',compact('diarios'));

		$array =['cnaceitem','cnarefrigerante','airene','cncomb','ceiasientos','ceicarroceria','ceeunidad',
				 'cfrenos','ccorrea','cradiador','ceseguridad','cbornes','cefluces','celuces','celucesem'];
		$var = [];
		
		function item($nombre){
				$nombre1 = MantenimientoDiario::where($nombre,'=','Si')->count();
				$nombre2= MantenimientoDiario::where($nombre,'=','No')->count();
				//echo $nombre.' = '.$nombre1.'-'.$nombre2.'---';
				$var= ['item' => $nombre ,
						'Si'=> $nombre1,
						'No'=> $nombre2 ];	
			}
		for ($i=0; $i <count($array) ; $i++) { 

			item($array[$i]);			
		}
		return $var;
	}
}