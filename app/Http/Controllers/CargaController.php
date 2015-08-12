<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pais;
use App\Estado;
use App\Ciudad;
use App\Municipio;
use App\Parroquia;

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
}
