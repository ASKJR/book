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
			if (Auth::attempt(['email' => $email, 'password' => $password ])) {
				$this->data['user'] = Auth::User();
				return View::make('home')->with($this->data);
			}
			else {
				return Redirect::back()
					->withErrors(['msgError', 'Login inválido'])
					->withInput(Input::except('password'));
			}
		}
	}
}
