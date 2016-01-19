<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Category;

class WelcomeController extends BaseController {

	/**
	 * Show the welcome page.
	 */
	public function index()
	{
		return response()->json(['name' => 'Abigail', 'state' => 'CA']);
	}

	public function category()
	{
		$categories = Category::all();
		return response()->json($categories);
	}

}