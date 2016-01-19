<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TestController extends Controller {

	/**
	 * Index page
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function getIndex()
    {
		return view('admin.test.index');
	}

}