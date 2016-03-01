<?php namespace prueba\Http\Controllers;

use prueba\Http\Requests;
use prueba\Http\Requests\GeneroRequest;
use prueba\Http\Controllers\Controller;

use Illuminate\Http\Request;

use prueba\Genero;

use Illuminate\Routing\Route;

class GeneroController extends Controller {


	public function __construct()
	{
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}

	public function find(Route $route)
	{
		$this->genre = Genero::find($route->getParameter('genero'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function listing(){
		$generos = Genero::all();

		return response()->json(
			$generos->toArray()
		);
	}
	public function index()
	{
		return view('genero.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('genero.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GeneroRequest $request)
	{
		if($request->ajax()){
			Genero::create($request->all());
			return response()->json([
				"mensaje"=>"creado"
			]);
		}
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
	public function edit($id)
	{
		$genre = Genero::find($id);

		return response()->json(
			$genre->toArray()
		);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$genre = Genero::find($id);
		$genre -> fill($request->all());
		$genre -> save();

		return response()->json([
			"mensaje" => "listo"
		]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$this->genre->delete();
		return response()->json(["mensaje"=>"genero borrado"]);
	}

}
