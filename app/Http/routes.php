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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function() {
//    return view('index');
//});

Route::get('/', 'IndexController@show');


//Create and destroy item routing
Route::get('createItem/{title}', 'IndexController@create');
Route::get('deleteItem/{id}', 'IndexController@destroy');