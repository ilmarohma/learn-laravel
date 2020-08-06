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


Route::get('/home', 'HomeController@show'); //In task 2 this route is just "/"

Route::get('/register', 'AuthController@form');

Route::post('/welcome', 'AuthController@greet');

Route::get('/master', function() {
    return view('master');
});

Route::get('/', function() {
    return view('task');
});