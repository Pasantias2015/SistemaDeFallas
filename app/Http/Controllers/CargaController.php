<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pais;
use App\Estado;
use App\Ciudad;
use App\Municipio;
use App\Parroquia;
use App\Modelo;
use App\Seccion;
use App\Grupo;
use App\Pieza;

class CargaController extends Controller {
	public function __construct()
		{
			$this->middleware('auth');
		}

	public function cargarestados()
		{	
			$estado = Estado::where('pais_id','=',\Input::get('pais_id'))->get();
			return response()->json($estado);
		}

	public function cargarciudades()
		{	
			$ciudad = Ciudad::where('estado_id','=',\Input::get('estado_id'))->get();
			return response()->json($ciudad);
		}
	public function cargarmunicipios()
		{	
			$municipio = Municipio::where('ciudad_id','=',\Input::get('ciudad_id'))->get();
			return response()->json($municipio);
		}
	public function cargarparroquias()
		{	
			$parroquia = Parroquia::where('municipio_id','=',\Input::get('municipio_id'))->get();
			return response()->json($parroquia);
		}
	public function cargarmodelos()
		{	
			$modelo = Modelo::where('marca_id','=',\Input::get('marca_id'))->get();
			return response()->json($modelo);
		}
	public function cargarsecciones()
		{	
			$seccion = Seccion::where('modelo_id','=',\Input::get('modelo_id'))->get();
			return response()->json($seccion);
		}
	public function cargargrupos()
		{	
			$grupo = Grupo::where('seccion_id','=',\Input::get('seccion_id'))->get();
			return response()->json($grupo);
		}
	public function cargarpiezas()
		{	
			$pieza = Pieza::where('grupo_id','=',\Input::get('grupo_id'))->get();
			return response()->json($pieza);
		}
}