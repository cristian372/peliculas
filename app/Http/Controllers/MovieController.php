<?php namespace prueba\Http\Controllers;

use prueba\Http\Requests;
use prueba\Http\Controllers\Controller;

use Illuminate\Http\Request;
use prueba\Genero;
use prueba\Movie;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class MovieController extends Controller {

	public function __construct()
	{
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}

	public function find(Route $route)
	{
		$this->movie = Movie::find($route->getParameter('pelicula'));
		$this->notFound($this->movie);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::Movies();
		return view('pelicula.index', compact('movies'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$genero = Genero::lists('genero', 'id');
		return view('pelicula.create',compact('genero'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Movie::create($request->all());
		Session::flash('message', 'pelicula creado corectamente');
		return Redirect::to('/pelicula');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$generos =  Genero::lists('genero', 'id');
		return view('pelicula.edit', ['movie'=>$this->movie, 'genero'=>$generos]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$this->movie->fill($request->all());
		$this->movie->save();
		Session::flash('message', 'pelicula ac');
		return Redirect::to('/pelicula');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$this->movie->delete();
		\Storage::delete($this->movie->duracion);
		Session::flash('message', 'pelicula ac');
		return Redirect::to('/pelicula');
	}

}
