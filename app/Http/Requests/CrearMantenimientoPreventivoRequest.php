<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearMantenimientoPreventivoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
						// 'usuario_id'=>'required'
					 //    'serviciounidadoperador_id'=>'required',
					    'fecha'=>'required',
					    'kilometraje'=>'required',
					    'combustible'=>'required',
					    'rlfiltroa'=>'required', //revision y limpieza filtro de aire
					    'clubricante'=>'required', //cambio lubricante motor
					    'cfaceite'=>'required', //cambio filtro de aceite
					    'lfcombustible'=>'required', //lavado del filtro de combustible
					    'rlineascom'=>'required', //revision de las lineas combustible descarte de fuga
					    'rrefrigerante'=>'required', //revision (descarte de fuga) de refrigerante
					    'rcorrea'=>'required', //revision de correa
					    'rtapasr'=>'required', //revision de las tapas de radiador
					    'lavadom'=>'required', //lavado de motor
					    'rsalidaa'=>'required', //Revisión: Salideros de Aceite
					    'rjuegovolante'=>'required',//Revisión: Juego del Volante
					    'revision'=>'required',//Revisión
					    'abarrasy'=>'required',//Ajustamiento de las Barras Yoquis de Dirección
					    'raengrase'=>'required',//Revisión, Ajuste y Engrase
					    'rnadireccion'=>'required',//Revisión: Nivel de Aceite de Direccion
					    'lfgases'=>'required',//Lavado: Filtro de Gases
					    'ceembrague'=>'required',//Chequeo y Engrase
					    'lavador'=>'required',//Lavado del Radiador
					    'cabmangueras'=>'required',//Chequeo: Abrazaderas y Mangueras
					    'raamortiguador'=>'required',//Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte
					    'rmuelle'=>'required',//Revisión: de Muelles
					    'lubricar'=>'required',//Lubricar
					    'racamaras'=>'required',//Revisión(Descarte de Fuga): Aire en las Cámaras
					    'lbasesusp'=>'required',//Limpieza: Base Suspensión del Aire
					    'rarboljunta'=>'required',//Revisión: Arbol y Junta de Transmisión
					    'engrasar'=>'required',//Engrasar
					    'rsaliderod'=>'required',//Revisión: Salidero del Diferencial
					    'raceitedif'=>'required',//Revisión: Nivel del Aceite Diferencial
					    'rbaterias'=>'required',//Rotación de Baterias
					    'caguabat'=>'required',//Chequeo: Nivel de Agua de Baterias
					    'mvoltaje'=>'required',//Medición de Voltaje
					    'albornes'=>'required',//Ajuste y Limpieza: Bornes de Baterias
					    'rcluces'=>'required',//Revisión y Chequeo: Luces
					    'cdestino'=>'required',//Chequeo: Funcionamiento del Indicador de Destino
					    'bandas'=>'required',//Chequeo y ajustes de bandas de freno
					    'ccorrea'=>'required',//Cambio de Correa
					    'cbaterias'=>'required', //Cambio de Baterias
					    'cbornes'=>'required', //Cambio de Bornes
					 	// 'mecanico',
						// 'tecmecanico',
						// 'ayudmecanico',
						// 'recibido'
		];
	}

}
