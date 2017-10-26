<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Projects;
use App\Category;

use File;
use Input;

class ProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$projects = Projects::orderBy('id', 'desc')->paginate(7);
		
		return view("dashboard.projects.projectspannel")
		->with("projects", $projects);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("dashboard.projects.create")->with('categorys',$categorys);

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function projectdetail($projectid)
	{
		
		$project = Projects::find($projectid);
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetail")->with('project',$project)->with('categorys',$categorys);

	}

	public function projecttype($projectid)
	{
		
		$project = Projects::find($projectid);
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projecttype")->with('project',$project)->with('categorys',$categorys);

	}

	public function projectdetailmyanmar($projectid)
	{
		
		$project = Projects::find($projectid);
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetailmyanmar")->with('project',$project)->with('categorys',$categorys);

	}

	public function projectdetailnext($projectid)
	{
		
		
		$project = Projects::where('id', '>', $projectid)->take(1)->get();



		if(count($project)==1)
		{

			$project = Projects::find($project[0]->id);

		}
		else
		{
			$project = Projects::find($projectid);


		}

			// var_dump($next);
			// die();

		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetail")->with('project',$project)->with('categorys',$categorys);

	}

	public function projectdetailnextmyanmar($projectid)
	{
		
		
		$project = Projects::where('id', '>', $projectid)->take(1)->get();



		if(count($project)==1)
		{

			$project = Projects::find($project[0]->id);

		}
		else
		{
			$project = Projects::find($projectid);


		}

			// var_dump($next);
			// die();

		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetailmyanmar")->with('project',$project)->with('categorys',$categorys);

	}

	public function projectdetailprev($projectid)
	{
		
		
		$project = Projects::orderby('id','desc')->where('id', '<', $projectid)->take(1)->get();



		if(count($project)==1)
		{

			$project = Projects::find($project[0]->id);

		}
		else
		{
			$project = Projects::find($projectid);


		}

			// var_dump($next);
			// die();

		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetail")->with('project',$project)->with('categorys',$categorys);

	}

	public function projectdetailprevmyanmar($projectid)
	{
		
		
		$project = Projects::orderby('id','desc')->where('id', '<', $projectid)->take(1)->get();



		if(count($project)==1)
		{

			$project = Projects::find($project[0]->id);

		}
		else
		{
			$project = Projects::find($projectid);


		}

			// var_dump($next);
			// die();

		$categorys = Category::orderBy('id', 'desc')->get();
		return view("pages.projectdetailmyanmar")->with('project',$project)->with('categorys',$categorys);

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		// var_dump($request->input("maincategory"));
		// die();

		$this->validate($request,[
			'photourl1' => 'required',
			'photourlsmall1' => 'required',
			'name' => 'required|max:255',
			'mname' => 'required|max:255',
			
			]);


		$project = new Projects();

		$imagePath = public_path() . '/images/projects/';
		$lastid = DB::table('projects')->select('id')->orderBy('id', 'DESC')->first();
		if($lastid!=null)
		{
			$lastid = $lastid->id + 1;
		}
		else
		{
			$lastid = 1;	
		}
		$directory = $lastid;
		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		// var_dump(Input::get('active'));

		// echo $destinationPath;
		// die();
		$photourl1 = "";
		$photourl2 = "";
		$photourl3 = "";
		$photourl4 = "";

		$photourlsmall1 = "";
		$photourlsmall2 = "";
		$photourlsmall3 = "";
		$photourlsmall4 = "";
		// $photourl5 = "";
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				$name =  time()  . '-mainslide' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				// echo "die";
				// die();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/projects/" . $directory . '/photos/' .  $name;

				if(Input::file('photourlsmall1')!="")
				{
					if(Input::file('photourlsmall1')->isValid())
					{
						$name =  time() . '-mainslidesmall1' . '.' . $input['photourlsmall1']->getClientOriginalExtension();
						Input::file('photourlsmall1')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall1 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourl2')!="")
				{
					if(Input::file('photourl2')->isValid())
					{
						$name =  time() . '-detail1' . '.' . $input['photourl2']->getClientOriginalExtension();
						Input::file('photourl2')->move($destinationPath, $name); // uploading file to given path
						$photourl2 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourlsmall2')!="")
				{
					if(Input::file('photourlsmall2')->isValid())
					{
						$name =  time() . '-detailsmall2' . '.' . $input['photourlsmall2']->getClientOriginalExtension();
						Input::file('photourlsmall2')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall2 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}


				if(Input::file('photourl3')!="")
				{
					if(Input::file('photourl3')->isValid())
					{
						$name =  time() . '-detail2' . '.' . $input['photourl3']->getClientOriginalExtension();
						Input::file('photourl3')->move($destinationPath, $name); // uploading file to given path

						$photourl3 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourlsmall3')!="")
				{
					if(Input::file('photourlsmall3')->isValid())
					{
						$name =  time() . '-detailsmall3' . '.' . $input['photourlsmall3']->getClientOriginalExtension();
						Input::file('photourlsmall3')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall3 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}


				if(Input::file('photourl4')!="")
				{
					if(Input::file('photourl4')->isValid())
					{
						$name =  time() . '-detail4' . '.' . $input['photourl4']->getClientOriginalExtension();
						Input::file('photourl4')->move($destinationPath, $name); // uploading file to given path
						$photourl4 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourlsmall4')!="")
				{
					if(Input::file('photourlsmall4')->isValid())
					{
						$name =  time() . '-detailsmall4' . '.' . $input['photourlsmall4']->getClientOriginalExtension();
						Input::file('photourlsmall4')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall4 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				
				// if(Input::file('photourl5')!="")
				// {
				// 	if(Input::file('photourl5')->isValid())
				// 	{
				// 		$name =  time() . '-detail5' . '.' . $input['photourl5']->getClientOriginalExtension();
				// 		Input::file('photourl5')->move($destinationPath, $name); // uploading file to given path

				// 		$photourl5 = "/images/projects/" . $directory . '/photos/' .  $name;
				// 	}
				// }
			}

		}

				

		$project->name = $request->input("name");
		$project->mname = $request->input("mname");
		$project->description = $request->input("description");
		$project->mdescription = $request->input("mdescription");
		$project->sdate = $request->input("sdate");
		$project->location = $request->input("location");
		$project->mlocation = $request->input("mlocation");
		$project->projectgoals = $request->input("projectgoals");
						$project->mprojectgoals = "null";

		$project->categoryid = $request->input("category");
		$project->status = $request->input("status");
		$project->photourl1 = $photourl1;
		$project->photourl2 = $photourl2;
		$project->photourl3 = $photourl3;
		$project->photourl4 = $photourl4;
		// $project->photourl5 = $photourl5;

		$project->photourlsmall1 = $photourlsmall1;
		$project->photourlsmall2 = $photourlsmall2;
		$project->photourlsmall3 = $photourlsmall3;
		$project->photourlsmall4 = $photourlsmall4;
		
		$project->save();
		return redirect()->route("projects.index");
	}

	/**
	 * Display the specified resource.
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
		//
		
		$project = Projects::find($id);
		$categorys = Category::orderBy('id', 'desc')->get();

		return view('dashboard.projects.edit')->with('project', $project)->with('categorys',$categorys);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
		$this->validate($request,[
			
			'name' => 'required|max:255',
			'mname' => 'required|max:255',
			
			]);
		

		$project = Projects::find($id);

		$imagePath = public_path() . '/images/projects/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $project->photourl1;
		$photourl2 = $project->photourl2;
		$photourl3 = $project->photourl3;	
		$photourl4 = $project->photourl4;

		$photourlsmall1 = $project->photourlsmall1;
		$photourlsmall2 = $project->photourlsmall2;
		$photourlsmall3 = $project->photourlsmall3;	
		$photourlsmall4 = $project->photourlsmall4;
		// $photourl5 = $project->photourl3;	
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				
				if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}

				$name =  time()  . '-mainslide' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/projects/" . $directory . '/photos/' .  $name;

			}

		}

		if(Input::file('photourlsmall1')!="")
		{
			if(Input::file('photourlsmall1')->isValid())
			{
				
				if($photourlsmall1!="")
				{
					if(file_exists(public_path() .$photourlsmall1))
					{
						unlink(public_path() . $photourlsmall1);
					}
				}
				$name =  time() . '-mainslidesmall1' . '.' . $input['photourlsmall1']->getClientOriginalExtension();
						Input::file('photourlsmall1')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall1 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourl2')!="")
				{
					if(Input::file('photourl2')->isValid())
					{

						if($photourl2!="")
						{
							if(file_exists(public_path() .$photourl2))
							{
								unlink(public_path() . $photourl2);
							}
						}
						$name =  time() . '-detail1' . '.' . $input['photourl2']->getClientOriginalExtension();
						Input::file('photourl2')->move($destinationPath, $name); // uploading file to given path
						$photourl2 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourlsmall2')!="")
				{
					if(Input::file('photourlsmall2')->isValid())
					{

						if($photourlsmall2!="")
						{
							if(file_exists(public_path() .$photourlsmall2))
							{
								unlink(public_path() . $photourlsmall2);
							}
						}
						$name =  time() . '-detailsmall2' . '.' . $input['photourlsmall2']->getClientOriginalExtension();
						Input::file('photourlsmall2')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall2 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}




				if(Input::file('photourl3')!="")
				{
					if(Input::file('photourl3')->isValid())
					{
						
						if($photourl3!="")
						{
							if(file_exists(public_path() .$photourl3))
							{
								unlink(public_path() . $photourl3);
							}
						}
						$name =  time() . '-detail2' . '.' . $input['photourl3']->getClientOriginalExtension();
						Input::file('photourl3')->move($destinationPath, $name); // uploading file to given path
						$photourl3 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}


				if(Input::file('photourlsmall3')!="")
				{
					if(Input::file('photourlsmall3')->isValid())
					{

						if($photourlsmall3!="")
						{
							if(file_exists(public_path() .$photourlsmall3))
							{
								unlink(public_path() . $photourlsmall3);
							}
						}
						$name =  time() . '-detailsmall3' . '.' . $input['photourlsmall3']->getClientOriginalExtension();
						Input::file('photourlsmall3')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall3 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}


				if(Input::file('photourl4')!="")
				{
					if(Input::file('photourl4')->isValid())
					{
						if($photourl4!="")
						{
							if(file_exists(public_path() .$photourl4))
							{
								unlink(public_path() . $photourl4);
							}
						}
						$name =  time() . '-detail4' . '.' . $input['photourl4']->getClientOriginalExtension();
						Input::file('photourl4')->move($destinationPath, $name); // uploading file to given path
						$photourl4 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

				if(Input::file('photourlsmall4')!="")
				{
					if(Input::file('photourlsmall4')->isValid())
					{

						if($photourlsmall4!="")
						{
							if(file_exists(public_path() .$photourlsmall4))
							{
								unlink(public_path() . $photourlsmall4);
							}
						}
						$name =  time() . '-detailsmall4' . '.' . $input['photourlsmall4']->getClientOriginalExtension();
						Input::file('photourlsmall4')->move($destinationPath, $name); // uploading file to given path
						$photourlsmall4 = "/images/projects/" . $directory . '/photos/' .  $name;
					}
				}

								// $project->prjtype = $request->input("prjtype");

				$project->name = $request->input("name");
				$project->mname = $request->input("mname");
				$project->description = $request->input("description");
				$project->mdescription = $request->input("mdescription");
				$project->sdate = $request->input("sdate");
				$project->location = $request->input("location");
				$project->mlocation = $request->input("mlocation");
				$project->projectgoals = $request->input("projectgoals");
				$project->mprojectgoals = "null";
				$project->categoryid = $request->input("category");
				$project->status = $request->input("status");
				$project->photourl1 = $photourl1;
				$project->photourl2 = $photourl2;
				$project->photourl3 = $photourl3;
				$project->photourl4 = $photourl4;

				$project->photourlsmall1 = $photourlsmall1;
				$project->photourlsmall2 = $photourlsmall2;
				$project->photourlsmall3 = $photourlsmall3;
				$project->photourlsmall4 = $photourlsmall4;
		// $project->photourl5 = $photourl5;
				
				$project->save();
				return redirect()->route("projects.index");
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

		$project = Projects::find($id);
		
		if($project->photourl1!="")
		{
			if(file_exists(public_path() .$project->photourl1))
			{
				unlink(public_path() . $project->photourl1);
			}
		}

		
		
		if($project->photourlsmall1!="")
		{
			if(file_exists(public_path() .$project->photourlsmall1))
			{
				unlink(public_path() . $project->photourlsmall1);
			}
		}
		
		if($project->photourl2!="")
		{
			if(file_exists(public_path() .$project->photourl2))
			{
				unlink(public_path() . $project->photourl2);
			}
		}
		

		if($project->photourlsmall2!="")
		{
			if(file_exists(public_path() .$project->photourlsmall2))
			{
				unlink(public_path() . $project->photourlsmall2);
			}
		}
		



		
		if($project->photourl3!="")
		{
			if(file_exists(public_path() .$project->photourl3))
			{
				unlink(public_path() . $project->photourl3);
			}
		}
		

		if($project->photourlsmall3!="")
		{
			if(file_exists(public_path() .$project->photourlsmall3))
			{
				unlink(public_path() . $project->photourlsmall3);
			}
		}
		


		
		if($project->photourl4!="")
		{
			if(file_exists(public_path() .$project->photourl4))
			{
				unlink(public_path() . $project->photourl4);
			}
		}
		
		if($project->photourlsmall4!="")
		{
			if(file_exists(public_path() .$project->photourlsmall4))
			{
				unlink(public_path() . $project->photourlsmall4);
			}
		}
		
		Projects::destroy($id);

		return redirect()->route("projects.index");
	}



}
