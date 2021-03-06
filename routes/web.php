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

Route:: get('/contact', function(){
	return view('contact');
});

Route::get('display', 'displayController@index');

Route:: get('/display', function(){
	return view('display', [
		'tasks' 	=> ['go to word', 'go to shop'],
		'foo' 		=> '<script>alert("foobar")</script>' 
	
	]);
});

Route::resource('projects', 'projectsController');
