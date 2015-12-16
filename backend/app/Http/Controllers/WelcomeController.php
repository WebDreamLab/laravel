<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class WelcomeController extends BaseController {

	/**
	 * Show the welcome page.
	 */
	public function index()
	{
		return view('welcome');
	}

}