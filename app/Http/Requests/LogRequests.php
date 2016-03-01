<?php namespace prueba\Http\Requests;

use prueba\Http\Requests\Request;

class LogRequests extends Request {

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
			'password'=>'required',
			'email'=>'required|email',
		];
	}

}
