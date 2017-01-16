<?php

class Login extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}

	public function loginProcess()
	{
		dd(Input::all());
	}


}
