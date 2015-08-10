<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearServicioRequest extends Request {

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
<<<<<<< HEAD
			  'descripcion' =>'required|unique:servicios,descripcion'
=======
            'descripcion' =>'required|unique:servicios,descripcion'
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c
		];
	}

}
