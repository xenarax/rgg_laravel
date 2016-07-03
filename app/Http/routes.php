<?php
Route::get('/', 'IndexController@index');

/**
 * Create Item routing
 */
Route::post('create', 'ItemController@create');

/**
 * Destroy Item routing
 */
Route::get('delete/{id}', 'ItemController@destroy');

Route::post('toggleDone/{id}', 'ItemController@toggleDone');