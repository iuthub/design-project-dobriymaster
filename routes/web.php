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
	$questions=DB::table('questions')->get();
	  return view('welcome',compact('questions'));
});


Route::get('/vopros', function () {
	$questions=DB::table('questions')->get();
	  return view('vopros',compact('questions'));
});


Route::get('/zakaz', function () {
	$zakaz=DB::table('zakaz')->get();
	  return view('zakaz',compact('zakaz'));
});

/*
Route::post('/post_answer', function () {
	$answer=post()->DB::table('questions');
	  return view('post_answer',compact('questions'));
});
*/

Route::get('insert','answer@insertform');
Route::post('create','answer@insert'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
