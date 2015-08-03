<?php namespace App\Http\Requests;

use Illuminate\Routing\Route;

class EditarLugarRequest extends Request {

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
		 	'descripcion' =>'required|unique:lugares,descripcion,'.$this->route->getParameter('lugares'),
            'estado'  =>'required'
		];
	}

}
