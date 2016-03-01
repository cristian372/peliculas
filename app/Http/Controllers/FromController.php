<?php namespace prueba\Http\Controllers;

use prueba\Http\Requests;
use prueba\Http\Controllers\Controller;

use Illuminate\Http\Request;

use prueba\Movie;

class FromController extends Controller {
	public function __construct(){
		$this->middleware('auth', ['only' => 'admin']);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function contactos()
	{
		return view('contacto.contacto');
	}

	public function reviews()
	{
		$movies = Movie::Movies();
		return view('table', compact('movies'));
	}

}
