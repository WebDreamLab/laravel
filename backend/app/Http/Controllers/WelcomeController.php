<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class WelcomeController extends BaseController {

	/**
	 * Show the welcome page.
	 */
	public function index()
	{
		return response()->json(['name' => 'Abigail', 'state' => 'CA']);
	}

}