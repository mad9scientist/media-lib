<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a view for the home page
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('page.landing');
	}

}
