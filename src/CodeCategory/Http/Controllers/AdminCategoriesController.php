<?php
/**
 * Created by PhpStorm.
 * User: LuisCarlos
 * Date: 23/01/2016
 * Time: 17:59
 */

namespace CodePress\CodeCategory\Http\Controllers;


class AdminCategoriesController extends Controller
{
	public function index()
	{
		return view('codecategory::index');
	}
}