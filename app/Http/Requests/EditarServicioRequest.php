<?php namespace App\Http\Requests;

use Illuminate\Routing\Route;

class EditarServicioRequest extends Request {

<<<<<<< HEAD
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
           'descripcion' =>'required|unique:servicios,descripcion,'.$this->route->getParameter('servicios'),
           'estado'  =>'required'
       ];
    }

}
=======
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
            'descripcion' =>'required|unique:servicios,descripcion,'.$this->route->getParameter('servicios'),
            'estado'  =>'required'
        ];
	}

}
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c