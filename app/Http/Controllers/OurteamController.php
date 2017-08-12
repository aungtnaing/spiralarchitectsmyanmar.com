<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



use App\Ourteam;
use DB;

use File;
use Input;


class OurteamController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ourteams = Ourteam::orderBy('id', 'desc')->paginate(5);
		return view('dashboard.ourteam.ourteampannel')->with('ourteams',$ourteams);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('dashboard.ourteam.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	
/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
public function store(Request $request)
{
	
	// echo "new user";
	// die();
	$this->validate($request,[
		'name' => 'required|max:255',
		'position' => 'required|max:255',
				// 'address' => 'required',
		'email' => 'required|unique:ourteam|max:255',
		
		]);
	
	$ourteam = new Ourteam();
	
	$imagePath = public_path() . '/images/ourteam/';

	$input = $request->all();
	$destinationPath = $imagePath . '/photos';
	$lastid = DB::table('ourteam')->select('id')->orderBy('id', 'DESC')->first();
		if($lastid!=null)
		{
			$lastid = $lastid->id + 1;
		}
		else
		{
			$lastid = 1;	
		}

	$photourl = "";


	if(Input::file('photourl')!="")
	{
		if(Input::file('photourl')->isValid())
		{
			$name =  time()  . $lastid . '.' . $input['photourl']->getClientOriginalExtension();
			File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl')->move($destinationPath, $name); // uploading file to given path
				$photourl = "/images/ourteam/photos/" .  $name;

			}

		}



		$ourteam->name = $request->input("name");
		// $user->mname = $request->input("mname");

		$ourteam->position = $request->input("position");
		$ourteam->fburl = $request->input("fburl");
		// $user->ph2 = $request->input("ph2");
		$ourteam->email = $request->input("email");
		$ourteam->linkin = $request->input("linkin");
		$ourteam->photourl = $photourl;

		// $user->photourl = $photourl;
		$ourteam->save();


	return redirect()->route("ourteams.index");




	}

	/**
	 * Display th$userid = $request->user()->id;specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// //
		// echo "edit";
		// die();
		$ourteam = Ourteam::find($id);
		return view('dashboard.ourteam.edit')->with('ourteam', $ourteam);


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$ourteam = Ourteam::find($id);

		if($ourteam->email!=$request->input("email"))
		{
			$this->validate($request,[
				'name' => 'required|max:255',
				'position' => 'required|max:255',
						// 'address' => 'required',
				'email' => 'required|unique:ourteam|max:255',
				
				]);
		}
		else
		{
			$this->validate($request,[
				'name' => 'required|max:255',
				'position' => 'required|max:255',
						// 'address' => 'required',
				'email' => 'required|max:255',
				
				]);

		}
		
	
	
	
	$imagePath = public_path() . '/images/ourteam/';

	$input = $request->all();
	$destinationPath = $imagePath . '/photos';
	

	$photourl = $ourteam->photourl;


	if(Input::file('photourl')!="")
	{
		if(Input::file('photourl')->isValid())
		{
			
				if($photourl!="")
				{
					if(file_exists(public_path() .$photourl))
					{
						unlink(public_path() . $photourl);
					}
				}


			$name =  time()  . $id . '.' . $input['photourl']->getClientOriginalExtension();
			File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl')->move($destinationPath, $name); // uploading file to given path
				$photourl = "/images/ourteam/photos/" .  $name;

			}

		}



		$ourteam->name = $request->input("name");
		// $user->mname = $request->input("mname");

		$ourteam->position = $request->input("position");
		$ourteam->fburl = $request->input("fburl");
		// $user->ph2 = $request->input("ph2");
		$ourteam->email = $request->input("email");
		$ourteam->linkin = $request->input("linkin");
		$ourteam->photourl = $photourl;

		// $user->photourl = $photourl;
		$ourteam->save();


		return redirect()->route("ourteams.index");


		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Ourteam::destroy($id);
		return redirect()->route("ourteams.index");

	}



}


