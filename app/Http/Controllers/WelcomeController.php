<?php namespace App\Http\Controllers;


use App\Mainslide;
use App\Homecontent;
use App\Category;

use View;
use Config;



class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mainslides = Mainslide::where('active',1)
			->orderBy('slideno','asc')
			->take(8)
			->get();

		$homecontent = Homecontent::find(1);

		
		$categorys = Category::orderBy('id', 'desc')->get();

		return view('pages.home')
			->with('mainslides', $mainslides)
			->with('homecontent', $homecontent)
			->with('categorys', $categorys);
		 	
	}

	public function myanmarindex()
	{
		$mainslides = Mainslide::where('active',1)
			->orderBy('slideno','asc')
			->take(8)
			->get();

		$homecontent = Homecontent::find(1);

		
		$categorys = Category::orderBy('id', 'desc')->get();

		return view('pages.homemyanmar')
			->with('mainslides', $mainslides)
			->with('homecontent', $homecontent)
			->with('categorys', $categorys);
		 	
	}

	

}


