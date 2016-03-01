<?php namespace prueba\Http\Controllers;

use prueba\Http\Requests;
use prueba\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;

use prueba\Http\Requests\LogRequests;

class LogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('usuario.login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(LogRequests $request)
	{
		if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
			return Redirect::to('/usuario/');
		}
		Session::flash('message-error', 'Datos incorrectos');
		return Redirect::to('/log/');
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/log/');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
