	<?php

		/*
		|--------------------------------------------------------------------------
		| Application Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register all of the routes for an application.
		| It's a breeze. Simply tell Laravel the URIs it should respond to
		| and give it the controller to call when that URI is requested.
		|
		*/

		use App\User;
		use App\Category;
		use App\Ourteam;
		


		Route::get('/', 'WelcomeController@index');
		Route::get('home', 'HomeController@index');
		
		Route::get('mn', 'LanguageController@changemn');
		Route::get('en', 'LanguageController@changeen');

		 // Route::get('mn/{projectid}', [
			// 'uses' => 'LanguageController@changemn'
			// ]);

		 
		 // Route::get('en/{projectid}', [
			// 'uses' => 'LanguageController@changeen'
			// ]);

		Route::get('homemyanmar', 'LanguageController@homemyanmar');



		 Route::get('aboutus', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				$ourteams = Ourteam::All();
				return view('pages.about')
					->with('categorys', $categorys)
					->with('ourteams', $ourteams);
				 	
				});

		  Route::get('aboutusmyanmar', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				$ourteams = Ourteam::All();
				return view('pages.aboutmyanmar')
					->with('categorys', $categorys)
					->with('ourteams', $ourteams);
				 	
				});


		 Route::get('services', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				// $ourteams = Ourteam::All();
				return view('pages.services')
					->with('categorys', $categorys);
					// ->with('ourteams', $ourteams);
				 	
				});


		 Route::get('servicesmyanmar', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				// $ourteams = Ourteam::All();
				return view('pages.servicesmyanmar')
					->with('categorys', $categorys);
					// ->with('ourteams', $ourteams);
				 	
				});

		  Route::get('contactus', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				// $ourteams = Ourteam::All();
				return view('pages.contactus')
					->with('categorys', $categorys);
					// ->with('ourteams', $ourteams);
				 	
				});

		    Route::get('contactusmyanmar', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				// $ourteams = Ourteam::All();
				return view('pages.contactusmyanmar')
					->with('categorys', $categorys);
					// ->with('ourteams', $ourteams);
				 	
				});

		  Route::get('projectdetail/{projectid}', [
			'uses' => 'ProjectsController@projectdetail'
			]);

		   Route::get('projectdetailmyanmar/{projectid}', [
			'uses' => 'ProjectsController@projectdetailmyanmar'
			]);

		  	  Route::get('projectdetailnext/{projectid}', [
			'uses' => 'ProjectsController@projectdetailnext'
			]);

		  	   Route::get('projectdetailnextmyanmar/{projectid}', [
			'uses' => 'ProjectsController@projectdetailnextmyanmar'
			]);
		

		  	  Route::get('projectdetailprev/{projectid}', [
			'uses' => 'ProjectsController@projectdetailprev'
			]);

		  	   Route::get('projectdetailprevmyanmar/{projectid}', [
			'uses' => 'ProjectsController@projectdetailprevmyanmar'
			]);

		// Route::get('testhome', 'HomeController@testindex');
	
		// Route::get('test', 'TestController@index');

		
		// Route::get('layout', function() {
		// 		  return View::make('layouts.test');
		// 		});
		// Route::post('tryajax','TestController@likeindex');
		
		

		// Route::resource('profiles','ProfilesController');


		Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
			]);


		Route::group(['middleware' => 'auth'],function()
		{
			
			

			Route::group(['middleware' => 'roleware'],function()
			{
				Route::resource('dashboard','DashboardController');
				Route::resource('categorys','CategoryController');
				Route::resource('mainslides','MainslideController');
				Route::resource('homecontents','HomecontentController');
				Route::resource('projects','ProjectsController');
				Route::resource('ourteams','OurteamController');
				
				
			});
			
			
		});

	