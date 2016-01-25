<?php
/**
 * Created by PhpStorm.
 * User: LuisCarlos
 * Date: 18/12/2015
 * Time: 21:43
 */

namespace CodePress\CodeCategory\Providers;


use Illuminate\Support\ServiceProvider;

class CodeCategoryServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->publishes([__DIR__. '/../../resources/migrations/' => base_path('database/migrations')], 'migrations');
		$this->loadViewsFrom(__DIR__ . '/../../resources/views/codecategory', 'codecategory');
		require_once __DIR__ . '/../Http/routes.php';
	}

	public function register()
	{

	}
}