<?php

class AuthController extends BaseController
{

	public function login()
	{
		if (Auth::check()) {
			return Redirect::route('dashboard');
		}
		return View::make('');
	}

	public function auth()
	{
		$params = Input::only('username', 'password');
		$validator = Validator::make($params, ['username' => 'required', 'password' => 'required']);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Auth::attempt(['username' => $params['username'], 'password' => $params['password'], 'active' => 1])) {
			return Redirect::intended('dashboard');
		}

		return Redirect::back()->with('error', 'Username or password invalid');
	}
}