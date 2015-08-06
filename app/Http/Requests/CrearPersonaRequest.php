<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearPersonaRequest extends Request {

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
		'pnombre' =>'required',
		'papellido' =>'required',
		'cedula' =>'required|numeric,unique:personas,cedula',
		'fnacimiento' =>'required',
		'sexo' =>'required',
		'telefono-hab' =>'required',
		'telefono-mov' =>'required',
		
		];
	}

}
