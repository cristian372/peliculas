<?php namespace prueba\Http\Controllers;

use prueba\Http\Requests;
use prueba\Http\Requests\UserCreateRequest;
use prueba\Http\Requests\UserUpdateRequest;
use prueba\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;
use Redirect;

use prueba\User;

use Illuminate\Routing\Route;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin', ['only'=>['create', 'update', 'destroy']]);
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}

	public function find(Route $route)
	{
		$this->user = User::find($route->getParameter('usuario'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$users = User::paginate(2);
		if($request->ajax()){
			return response()->json(view('usuario.users',compact('users'))->render());
		}
		
		return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		User::create($request->all());

		return redirect('/usuario')->with('message','store');
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
		return view('usuario.edit',['user'=>$this->user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserUpdateRequest $request)
	{

		$this->user -> fill($request->all());
		$this->user -> save();

		Session::flash('message','usuario editado corecctamente');

		return Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->delete();
		Session::flash('message','usuario eliminado corecctamente');

		return Redirect::to('/usuario');
	}

}
