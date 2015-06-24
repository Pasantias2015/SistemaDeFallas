<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'cedula' => 'required|max:10',
			'pnombre' => 'required|max:20',
			'snombre' => 'required|max:20',
			'papellido' => 'required|max:20',
			'sapellido' => 'required|max:20',
			'usuario' => 'required|max:20',
			'fnacimiento' => 'required|date|max:11',
			//'fingreso' => 'required|date|max:11',
			'cpassword' => 'required|max:255',
			'password'  => 'required|max:255',
			'preguntas' => 'required|max:40',
			'respuestas' => 'required|max:40'
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		
		return User::create([
			'cedula' => $data['cedula'],
			'pnombre' => $data['pnombre'],
			'snombre' => $data['snombre'],
			'papellido' => $data['papellido'],
			'sapellido' => $data['sapellido'],
			'usuario' => $data['usuario'],
			'direccion' => $data['direccion'],
			'fnacimiento' => $data['fnacimiento'],
			'cargo' => $data['cargo'],
			'password' => bcrypt($data['password']),
			'cpassword' => bcrypt($data['cpassword']),
			'telefono' => $data['telefono'],
			'preguntas' => $data['preguntas'],
			'respuestas' => $data['respuestas'],
			'fingreso' => $data['fingreso'],
		]);
	}

}
