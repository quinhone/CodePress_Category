<?php


Route::group(['prefix' => 'categories', 'namespace' => 'CodePress\CodeCategory\Http\Controllers'], function(){
	Route::get('test', 'AdminCategoriesController@index');
});