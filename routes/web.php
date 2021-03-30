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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo/{name}', 'DemoController@index');
Route::get('/home', 'DemoController@home');
Route::get('/post', 'DemoController@post');

Route::get('/login','LoginController@login');
Route::post('/login','LoginController@postLogin');


Route::get('/view-1', function () {
	$age = 10;
	$name = 'Nguyễn Văn A';
	$data = [
		'age' => $age,
		'name' => $name
	];
	return view('hello',$data);
});

Route::get('/view-2', function () {
	$age = 10;
	$name = 'Nguyễn Văn A';
	$data = [
		'age' => $age,
		'name' => $name
	];
	return view('welcome', $data);
});