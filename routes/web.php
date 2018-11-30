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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'homeController@index');
/*Route::get('/', function(){
	return view('welcome');
});

//Route::get('/','UserController@front');
//Route::post('/','UserController@storeFront')->name('login.store');
/*Route::get('/createUsers', function(){
	return view('createUser');
});*/
Route::get('/createUsers', 'UserController@index');
Route::post('/createUsers','UserController@store')->name('user.store');

Route::get('/home', 'UserController@index2');
Route::post('/home','UserController@store2')->name('home.store');

Route::get('/Account', 'UserController@account');
Route::post('/Account', 'AccountController@updateAvatar');
Route::get('/About', 'HomeController@about');
Route::get('/Contact', 'HomeController@contact');
Route::post('/Account/Edit' ,'AccountController@editName');
Route::get('/Account/Edit' ,'AccountController@editName1');

Route::post('/Account/Password' ,'AccountController@updatePassword');
Route::get('/Account/Password' ,'AccountController@updatePassword1');

Route::get('/FitnessProfile', 'FitnessController@index');
Route::post('/FitnessProfileEdit', 'FitnessController@edit');
Route::get('/FitnessProfileEdit', 'FitnessController@edit1');
Route::get('/CreateFitnessProfile', 'FitnessController@create');

Route::post('/FitnessProfileCreate', 'FitnessController@create2')->name('update.info');

/*Plans*/
Route::get('/Plans', 'PlansController@index');
Route::get('/Plans/Cardio', 'PlansController@cardio');
Route::get('Plans/Cardio{id}', function($id){
	return redirect()->action('PlansController@display', ['id'=>$id]);
});
Route::get('/Plans/Cardio/{id}', 'PlansController@display');
Route::get('/Plans/Gains/{id}', 'PlansController@display');

Route::get('/Plans/Gains', 'PlansController@gains');
Route::post('/Plans/Cardio/{id}/added', 'PlansController@add');

/*Routes/Trails */
Route::get('/Routes', 'RoutesController@index');
Route::get('Routes/{id}', function($id){
	return redirect()->action('RouteController@display', ['id'=>$id]);
});
Route::get('/Routes/{id}', 'RoutesController@display');
Route::get('/Routes/{id}/CreateComment','CommentController@create');
Route::get('Routes/{id}/DeleteComment', 'CommentController@delete');
Route::post('Routes/{id}/delete', 'CommentController@delete2');
Route::post('Routes/{id}/temp', 'RoutesController@add');

Route::post('/Routes/{id}','CommentController@store');
//Route::get('/','RoutesController@index');
//Route::get('/','PlansController@index');
//Route::get('/','FitnessController@index');



/*Route::get('/', function(){
	return view('sent');
});*/

