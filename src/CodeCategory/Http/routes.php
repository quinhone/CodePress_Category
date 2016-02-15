<?php


Route::group ( [ 'prefix' => 'admin/categories', 'as' => 'admin.categories.', 'namespace' => 'CodePress\CodeCategory\Http\Controllers', 'middleware' => ['web']], function () {
	Route::get ( '/', [ 'as' => 'index', 'uses' => 'AdminCategoriesController@index' ] );
	Route::get ( '/create', [ 'as' => 'create', 'uses' => 'AdminCategoriesController@create' ] );
	Route::post ( '/store', [ 'as' => 'store', 'uses' => 'AdminCategoriesController@store' ] );
} );