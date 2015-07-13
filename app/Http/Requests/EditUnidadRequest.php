<?php namespace App\Http\Requests;

use Illuminate\Routing\Route;

class EditUnidadRequest extends Request {

    /**
     * @param Route $route
     */
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
            'serialcarroceria' =>'required|unique:unidades,serialcarroceria,'.$this->route->getParameter('unidades'),
            'nidentificacion'  =>'required|unique:unidades,nidentificacion,'.$this->route->getParameter('unidades'),
            'vin'              =>'required|unique:unidades,vin,'.$this->route->getParameter('unidades'),
            'serialmotor'      =>'required|unique:unidades,serialmotor,'.$this->route->getParameter('unidades')
        ];
	}

}
