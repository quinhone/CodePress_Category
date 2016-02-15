<?php
/**
 * Created by PhpStorm.
 * User: LuisCarlos
 * Date: 23/01/2016
 * Time: 17:59
 */

namespace CodePress\CodeCategory\Http\Controllers;


use CodePress\CodeCategory\Entities\Category;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
	private $category;

	public function __construct (Category $category)
	{
		$this->category = $category;
	}

	public function index()
	{
		$categories = $this->category->all();
		return view('codecategory::index', compact('categories'));
	}

	public function create()
	{
		$categories = $this->category->all();
		return view('codecategory::create', compact('categories'));
	}

	public function store(Request $request)
	{
		$this->category->create($request->all());
		return redirect()->route('admin.categories.index');
	}
}