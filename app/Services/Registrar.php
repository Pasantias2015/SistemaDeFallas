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
			'cedula' => 'required|max:255|unique:users',
			'pnombre' => 'required|max:255',
			'snombre' => 'required|max:255',
			'papellido' => 'required|max:255',
			'sapellido' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'fnacimiento' => 'required|date|max:11',
			'fingreso' => 'required|date|max:11',
			'password_confirmation' => 'required|min:6',
			'password'  => 'required|min:6',
			'preguntas' => 'required|max:255',
			'respuestas' => 'required|max:255'
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
			'email' => $data['email'],
			'direccion' => $data['direccion'],
			'fnacimiento' => $data['fnacimiento'],
			'cargo' => $data['cargo'],
			'password' => bcrypt($data['password']),
			'password_confirmation' => bcrypt($data['password_confirmation']),
			'telefono' => $data['telefono'],
			'preguntas' => $data['preguntas'],
			'respuestas' => $data['respuestas'],
			'fingreso' => $data['fingreso'],
		]);
	}

}
