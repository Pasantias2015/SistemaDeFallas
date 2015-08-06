<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditarModeloRequest extends Request {

	 public function __construct(Route $route)
   {
       $this->route = $route;
   }
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
				'codigo'  =>'required',
				'descripcion' =>'required',
				'combustible' =>'required',
				'transmision' =>'required',
				'dimension' =>'required',
				'year' =>'required'
		];
	}

}
