<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
//  return view('welcome');

	Route::get('/', 'PagesController@index');
	Route::get('/about', 'PagesController@about');
	Route::get('/services', 'PagesController@services');

	/*
	Route::group(['middleware' => ['web','auth']], function(){
		Route::get('/', function () {
			return view('Welcome');
		});
	*/

	Route::resource('lodgers', 'PaymentsController');

	/*
	Route::get('lodgers', function() {
		if (Auth::user()->admin == 0) {
			return view('/lodgers');
		} else {
			$users['users'] = \App\User::all();
			return view('adminhome', $users);
		}
	});

});
*/

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


