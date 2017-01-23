<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}

	public function login_post()
	{
		
		$rules = array(
    		'email'    => 'required|email', 
    		'password' => 'required|min:6' 
		);

		$input    = Input::all();
		$email 	  = $input["email"];
		$password = $input["password"];

		$validator = Validator::make($input, $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
					->withErrors($validator)
					->withInput(Input::except('password'));
		}
		else {
			//LOGADO COM SUCESSO
			if (Auth::attempt(['email' => $email, 'password' => $password ])) {
				//redireciona para BookController@index
				return Redirect::to('book');
			}
			//LOGIN FAIL
			else {
				return Redirect::back()
					->withErrors(['msgError', 'Login inválido'])
					->withInput(Input::except('password'));
			}
		}
	}
}
