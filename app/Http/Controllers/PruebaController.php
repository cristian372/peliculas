<?php namespace prueba\Http\Controllers;

class PruebaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function index()
	{
		return "desde controlador";
	}

	public function nombre($nombre)
	{
		return "desde controlador".$nombre;
	}


}