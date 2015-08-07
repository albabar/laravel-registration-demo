<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/',  ['middleware' => 'guest', 'uses' => 'HomeController@index']);
get('dashboard', ['middleware' => 'auth', 'uses' => 'Admin\DashboardController@index']);
post('register', 'Auth\AuthController@postRegister');
post('login', 'Auth\AuthController@postLogin');
get('logout', 'Auth\AuthController@getLogout');