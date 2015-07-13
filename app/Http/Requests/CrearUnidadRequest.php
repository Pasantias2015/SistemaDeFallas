<?php namespace App\Http\Requests;


class CrearUnidadRequest extends Request {

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
            'serialcarroceria' =>'required|unique:unidades,serialcarroceria',
            'nidentificacion'  =>'required|unique:unidades,nidentificacion',
            'vin'              =>'required|unique:unidades,vin',
            'serialmotor'      =>'required|unique:unidades,serialmotor'
		];
	}

}
