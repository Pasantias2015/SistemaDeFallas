<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearMantenimientoDiarioRequest extends Request {

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
		return [		'usuario_id'=>'required',
                        'fecha'=>'required',
    					'serviciounidadoperador_id'=>'required',
    					'cnaceitem'=>'required',
    					'cnarefrigerante'=>'required',
    					'airene'=>'required',
    					'cncomb'=>'required',
    					'ceiasientos'=>'required',
    					'ceicarroceria'=>'required',
    					'ceeunidad'=>'required',
    					'cfrenos'=>'required',
    					'ccorrea'=>'required',
    					'cradiador'=>'required',
    					'ceseguridad'=>'required',
    					'cbornes'=>'required',
    					'cefluces'=>'required'
    					'celuces'=>'required',
    					'celucesem'=>'required'
		];
	}

}
