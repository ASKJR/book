<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('login', 'LoginController', array('only' => array('index')));
Route::post('login/process','LoginController@login_post');
Route::get('logout','LogoutController@logout');