<?php

Route::get('/', function () {
	return View::make('hello');
});

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'AuthController@auth']);

