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

Route::get('/', function() {
	return view('welcome');
	});
/*Route::get('users/edit/{id}',['uses'=>'UsersController@edit', function($id){}]);
Route::get('users', ['uses'=>'UsersController@index', function(){}]);
Route::put('users/update/{id}',['uses'=>'UsersController@update', function($id){}]);
*/




	Route::group(['middleware'=>'auth'], function(){
		Route::resource('expenditures', 'ExpendituresController');
	});
	Route::group(['middleware'=>'App\Http\Middleware\StaffMiddleware'], function(){
		Route::group(['middleware'=>'auth'], function() {
			Route::get('welcome', function(){
				return view('staffhome');
				});
			});
		});
	Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
		Route::group(['middleware'=>'auth'], function() {
			Route::get('welcome', function(){
				return view('admin');
				});
			Route::get('contributions/create/confirm', 'ContributionsController@confirm');
			Route::resource('contributions', 'ContributionsController');
			Route::resource('budgets','BudgetsController');
			Route::resource('fees','FeesController');
			Route::resource('students','StudentsController');
			Route::resource('parents','ParentsController');
			Route::resource('invoices','InvoicesController');
			Route::resource('notes', 'NotesController');
			Route::resource('users','UsersController');
			});
		});
/***
***Authentication
**/
Route::controllers([
	'auth'=>'Auth\AuthController',
	'password'=>'Auth\PasswordController'
	]);
?>
