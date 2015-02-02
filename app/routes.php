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

Route::group(['before' => 'auth'], function () {
	Route::get('/', ['as' => 'home', function (){
		return Redirect::route('buildings.show',['1'] );
	}]);
	Route::resource('/buildings', 'BuildingsController', ['only' => 'show']);
	Route::post('/buildings', ['uses' => 'BuildingsController@build']);
	Route::get('/users/restart', ['uses' => 'UsersController@restart']);
	Route::post('/game/next-turn', ['uses' => 'GameController@nextTurn']);
});

//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@doLogin');
Route::get('logout', 'UsersController@logout');

